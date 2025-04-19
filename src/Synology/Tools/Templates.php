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
     * @return string
     */
    public function loadTemplate($name)
    {
        $file = $this->tools . '/templates/' . $name . '.yaml';
        return file_get_contents($file);
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
