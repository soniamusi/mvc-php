<?php

namespace App\Utils;

class View
{

    /**
     * Método responsavel por retornar o conteudo de uma view
     * @param string
     * @return string 
     */

    private static function getContentView($view)
    {
        $file = __DIR__ . '/../../resources/view/' . $view . '.html';
        return file_exists($file) ? file_get_contents($file) : '';
    }

    /**
     * Metodo responsavel por retornar o conteudo renderizado de uma view
     * @param string $view
     * @param array $vars (array de valores strings e numericos)
     * @return string
     */

    public static function render($view, $vars = [])
    {
        //conteudo da view
        $contentView =  self::getContentView($view);

        // chaves do array de variaveis
        $keys = array_keys($vars);
        $keys = array_map(function ($item) {
            return '{{' . $item . '}}';
        }, $keys);


        //retorna o conteudo renderizado
        return str_replace($keys, array_values($vars), $contentView);
    }
}
