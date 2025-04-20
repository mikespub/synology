<?php

namespace Synology\Tools;

/**
 * Summary of ServiceGenerator
 */
class ServiceGenerator
{
    use ConfigFiles;
    use Templates;

    /**
     * Summary of generateServices
     * @param string $basedir for src/Synology/Services
     * @return void
     */
    public function generateServices($basedir = null)
    {
        $basedir ??= dirname($this->tools) . '/src/Synology/Services';
        $services = [];
        foreach ($this->apilist as $root => $json) {
            $service = explode('.', $root)[1];
            $count = $this->countSubsetMethods($root, $json);
            echo "Service $service:\n";
            echo json_encode($count, JSON_PRETTY_PRINT);
            echo "\n";
            foreach ($json as $api => $values) {
                $version = $values['maxVersion'];
                $methods = $values['methods'][$version] ?? false;
                if (!$methods) {
                    $version = $values['minVersion'];
                    $methods = $values['methods'][$version] ?? [];
                }
                // filter methods with schema files
                $methods = array_filter($methods, function ($method) use ($api) {
                    $schemaFile = $this->getSchemaFile($api, $method);
                    return file_exists($schemaFile);
                });
                if (empty($methods)) {
                    continue;
                }
                $path = $values['path'];
                $format = $values['requestFormat'] ?? false;
                $services[$service] ??= [
                    'service' => $service,
                    'version' => $version,
                    'methods' => [],
                    'subsets' => [],
                ];
                // improve rules for splitting
                $split = false;
                $type = str_replace($root, '', $api);
                if (!empty($type)) {
                    $subset = explode('.', $type)[1];
                } else {
                    $subset = '';
                }
                $count[$subset] ??= 0;
                if ($count[$subset] > 1 || count(explode('.', $api)) > 3) {
                    $split = true;
                }
                foreach ($methods as $method) {
                    $type = str_replace($root, '', $api);
                    if ($split) {
                        $subset = explode('.', $type)[1];
                        $type = str_replace('.' . $subset, '', $type);
                    } else {
                        $subset = '';
                    }
                    $name = $method;
                    $type = str_replace('.', '', $type);
                    if (str_contains($name, '_')) {
                        $name = ucwords($name, '_');
                        $name = lcfirst(str_replace('_', '', $name));
                    }
                    $args = [];
                    $vars = [];
                    $params = $this->getRequiredParams($api, $method);
                    foreach ($params as $key => $value) {
                        $key2 = $key;
                        if (in_array($key, ['api', 'path', 'method', 'version', 'params', 'this'])) {
                            $key2 = 'in' . ucfirst($key);
                        }
                        $encode = true;
                        if (is_null($value)) {
                            $args[] = '?string $' . $key2 . ' = null';
                        } elseif (is_bool($value)) {
                            $args[] = 'bool $' . $key2 . ' = ' . ($value ? 'true' : 'false');
                        } elseif (is_int($value)) {
                            $args[] = 'int $' . $key2 . ' = ' . $value;
                            $encode = false;
                        } elseif (is_array($value)) {
                            $args[] = 'array $' . $key2 . ' = ' . json_encode($value);
                        } elseif (is_string($value)) {
                            $args[] = 'string $' . $key2 . ' = "' . $value . '"';
                        } else {
                            $hmmm = gettype($value);
                            $args[] = $hmmm . ' $' . $key2 . ' = ' . $value . ' /** ? */';
                        }
                        if (!empty($format) && $format == "JSON" && $encode) {
                            $vars[] = "\n            '$key' => json_encode(\${$key2}, JSON_UNESCAPED_SLASHES),";
                        } else {
                            $vars[] = "\n            '$key' => \${$key2},";
                        }
                    }
                    if (empty($subset)) {
                        $rest = ltrim(str_replace($root, '', $api), '.');
                    } else {
                        $rest = ltrim(str_replace($root . '.' . $subset, '', $api), '.');
                    }
                    $info = [
                        'name' => "$name$type",
                        'args' => implode(', ', $args),
                        'api' => $api,
                        'rest' => $rest,
                        'path' => ($path == 'entry.cgi') ? 'static::API_PATH' : "'entry.cgi'",
                        'method' => $method,
                        'version' => $version,
                        'params' => implode('', $vars),
                        'format' => $format,
                    ];
                    if (empty($subset)) {
                        $services[$service]['methods']["$name$type"] = $info;
                    } else {
                        $services[$service]['subsets'][$subset] ??= [];
                        $services[$service]['subsets'][$subset]["$name$type"] = $info;
                    }
                }
            }
        }
        ksort($services);
        $this->updateServicesClient($basedir, $services);
        $this->updateServiceFiles($basedir, $services);
    }

    /**
     * Summary of countSubsetMethods
     * @param string $root
     * @param array<string, mixed> $json
     * @return array<string, int>
     */
    public function countSubsetMethods($root, $json)
    {
        $count = [];
        foreach ($json as $api => $values) {
            $version = $values['maxVersion'];
            $methods = $values['methods'][$version] ?? false;
            if (!$methods) {
                $version = $values['minVersion'];
                $methods = $values['methods'][$version] ?? [];
            }
            $type = str_replace($root, '', $api);
            if (empty($type)) {
                continue;
            }
            $subset = explode('.', $type)[1];
            $count[$subset] ??= 0;
            $count[$subset] += count($methods);
        }
        return $count;
    }

    /**
     * Summary of updateServicesClient
     * @param string $basedir for src/Synology/Services
     * @param array<string, mixed> $services
     * @return void
     */
    public function updateServicesClient($basedir, $services)
    {
        $filepath = $basedir . '/ServicesClient.php';
        $templates = [];
        $templates['property'] = $this->loadClassTemplate('class_property');
        $templates['function'] = $this->loadClassTemplate('class_function');
        $output = $this->loadClassTemplate('class_client');
        foreach ($services as $service => $info) {
            $replace = [
                'class' => $service,
                'property' => strtolower($service),
            ];
            $output .= $this->replaceParams($templates['property'], params: $replace);
        }
        foreach ($services as $service => $info) {
            $replace = [
                'api' => $service,
                'service' => $service,
                'class' => $service,
                'property' => strtolower($service),
                'client' => '',
            ];
            $output .= $this->replaceParams($templates['function'], $replace);
        }
        $output .= $this->loadClassTemplate('class_footer');
        echo "DONE: $filepath\n";
        file_put_contents($filepath, $output);
    }

    /**
     * Summary of updateServiceFiles
     * @param string $basedir for src/Synology/Services
     * @param array<string, mixed> $services
     * @return void
     */
    public function updateServiceFiles($basedir, $services)
    {
        $templates = [];
        $templates['header'] = $this->loadClassTemplate('class_header');
        $templates['method'] = $this->loadClassTemplate('class_method');
        $templates['footer'] = $this->loadClassTemplate('class_footer');
        $templates['property'] = $this->loadClassTemplate('class_property');
        $templates['function'] = $this->loadClassTemplate('class_function');
        $templates['subset'] = $this->loadClassTemplate('class_subset');
        $readme = $this->loadClassTemplate('class_readme');
        $readme .= "<ul>\n";
        foreach ($services as $service => $info) {
            $lower = strtolower($service);
            $readme .= "    <li>\n";
            $readme .= "        \$syno->$lower() : <a href=\"./$service.php\">Synology\\Services\\$service</a>\n";
            $filepath = $basedir . '/' . $service . '.php';
            //if (file_exists($filepath)) {
            //    continue;
            //}
            if (!empty($info['methods'])) {
                $name = array_keys($info['methods'])[0];
            } else {
                $subset = array_keys($info['subsets'])[0];
                $name = strtolower($subset) . '()->' . array_keys($info['subsets'][$subset])[0];
            }
            $params = [
                'service' => $service,
                'version' => $info['version'],
                'call' => strtolower($service) . '()->' . $name . '();',
            ];
            $output = $this->replaceParams($templates['header'], $params);
            if (!empty($info['subsets'])) {
                $readme .= "        <ul>\n";
                $this->updateSubsetFiles($basedir, $service, $info, $templates);
                foreach ($info['subsets'] as $subset => $vars) {
                    $part = strtolower($subset);
                    $readme .= "            <li>\$syno->$lower()->$part() : <a href=\"./$service/$subset.php\">Synology\\Services\\$service\\$subset</a></li>\n";
                    $replace = [
                        'class' => $service . '\\' . $subset,
                        'property' => strtolower($subset),
                    ];
                    // restricted class names
                    if (in_array($subset, ['Default', 'List'])) {
                        $replace['class'] .= 'Svc';
                    }
                    $output .= $this->replaceParams($templates['property'], $replace);
                }
                foreach ($info['subsets'] as $subset => $vars) {
                    $replace = [
                        'api' => $service . '.' . $subset,
                        'service' => $service . '#/' . $service . '.' . $subset,
                        'class' => $service . '\\' . $subset,
                        'property' => strtolower($subset),
                        'client' => '->client',
                    ];
                    // restricted class names
                    if (in_array($subset, ['Default', 'List'])) {
                        $replace['class'] .= 'Svc';
                    }
                    $output .= $this->replaceParams($templates['function'], $replace);
                }
                $readme .= "        </ul>\n";
            }
            foreach ($info['methods'] as $name => $vars) {
                $output .= $this->replaceParams($templates['method'], $vars);
            }
            $output .= $this->replaceParams($templates['footer'], $params);
            $filepath = $basedir . '/' . $service . '.php';
            echo "DONE: $filepath\n";
            file_put_contents($filepath, $output);
            $readme .= "    </li>\n";
        }
        $readme .= "</ul>\n\n";
        $filepath = $basedir . '/README.md';
        echo "DONE: $filepath\n";
        file_put_contents($filepath, $readme);
    }

    /**
     * Summary of updateSubsetFiles
     * @param string $basedir for src/Synology/Services
     * @param string $service
     * @param array<string, mixed> $info
     * @param array<string, mixed> $templates
     * @return void
     */
    public function updateSubsetFiles($basedir, $service, $info, $templates)
    {
        if (!is_dir($basedir . '/' . $service)) {
            mkdir($basedir . '/' . $service);
        }
        foreach ($info['subsets'] as $subset => $vars) {
            $name = array_keys($info['subsets'][$subset])[0];
            $replace = [
                'service' => $service,
                'subset' => $subset,
                'class' => $subset,
                'version' => $info['version'],
                'call' => strtolower($service) . '()->' . strtolower($subset) . '()->' . $name . '();',
            ];
            // restricted class names
            if (in_array($subset, ['Default', 'List'])) {
                $replace['class'] .= 'Svc';
            }
            $output = $this->replaceParams($templates['subset'], $replace);
            foreach ($info['subsets'][$subset] as $name => $vars) {
                $output .= $this->replaceParams($templates['method'], $vars);
            }
            $output .= $this->replaceParams($templates['footer'], $replace);
            $filepath = $basedir . '/' . $service . '/' . $replace['class'] . '.php';
            echo "DONE: $filepath\n";
            file_put_contents($filepath, $output);
        }
    }
}
