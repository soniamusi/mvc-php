<?php

namespace App\Controller\Pages;

use \App\Utils\View;

class Page
{
    /**
     * Método responsavel por rederizar o topo da pagina
     * @return string
     */

    private static function getHeader()
    {
        return View::render('pages/header');
    }

    /**
     * Método responsavel por rederizar o footer da pagina
     * @return string
     */

    private static function getFooter()
    {
        return View::render('pages/footer');
    }

    /**
     * Metodo responsavel por retornar o conteudo(view) da nossa pagian Generica PAGE
     * @return string
     */

    public static function getPage($title, $content)
    {
        return View::render('pages/page', [
            'title' => $title,
            'header' => self::getHeader(),
            'content' => $content,
            'footer' => self::getFooter()
        ]);
    }
}
