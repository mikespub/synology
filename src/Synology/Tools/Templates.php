<?php

namespace Synology\Tools;

/**
 * Summary of Templates
 */
trait Templates
{
    protected string $tools;

    /**
     * Summary of loadTemplate
     * @param string $name
     * @param string $format
     * @return string
     */
    public function loadTemplate($name, $format = '.yaml')
    {
        $file = $this->tools . '/templates/' . $name . $format;
        return file_get_contents($file);
    }

    /**
     * Summary of loadClassTemplate
     * @param string $name
     * @return string
     */
    public function loadClassTemplate($name)
    {
        return $this->loadTemplate($name, '.tmpl');
    }

    /**
     * Summary of replaceParams
     * @param string $template
     * @param array<string, mixed> $params
     * @return string
     */
    public function replaceParams($template, $params = [])
    {
        $search = [];
        $replace = [];
        foreach ($params as $key => $val) {
            array_push($search, '%' . $key . '%');
            array_push($replace, $val);
        }
        return str_replace($search, $replace, $template);
    }
}
