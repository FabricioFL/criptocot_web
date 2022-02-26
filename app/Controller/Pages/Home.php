<?php

namespace App\Controller\Pages;

use App\Utils\View;

class Home extends Page
{

    /**
     * método responsalvel por retornar a view da home
     *@return string
     */
    public static function getHome()
    {
        $content =  View::render('pages/index', [

            'username' => 'gerso'

        ]);

        return parent::getPage('CriptoCot | sua plataforma de monitoramento de ativos', $content);
    }

}