<?php

namespace App\Utils;

class View
{


    /**
     * 
     *@param string $view
     *@return string
     */
    private static function getViewContent($view)
    {
        $file = __DIR__.'/../../resources/view/'.$view.'.html';
        return file_exists($file) ? file_get_contents($file) : '';
    }


    /**
     * 
     *@param string $view
     *@param array $vars
     *@return string
     */
    public static function render($view, $vars = [])
    {
        $viewContent = self::getViewContent($view);

        //
        $keys = array_keys($vars);
        $keys = array_map(function($item){
            return '{{'.$item.'}}';
        }, $keys);

        return str_replace($keys, array_values($vars), $viewContent);
    }
}