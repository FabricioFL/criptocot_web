<?php

namespace App\Controller\Pages;

use App\Utils\View;

class Page
{
    /**
     * responsavel por renderizar o header
     * @return string
     */
    private static function getHeader()
    {
        return View::render('pages/header');
    }

     /**
     *  responsavel por renderizar o footer
     * @return string
     */
    private static function getFooter()
    {
        return View::render('pages/footer');
    }



    /**
     *  responsavel por renderizar o template page
     * @param string $title
     * @param string $content
     * @return string
     */
    public static function getPage($title, $content)
    {
        return view::render('pages/page', [

            'title' => $title,
            'header' => self::getHeader(),
            'content' => $content,
            'footer' => self::getFooter()

        ]);
    }
}