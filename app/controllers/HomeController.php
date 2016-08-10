<?php

/**
 * \HomeController
 */
class HomeController extends BaseController
{
    public function home()
    {
        $article = Article::find()->one();
        include dirname(__FILE__).'/../views/home.php';
    }
}