<?php
namespace Itb;

class MainController
{
    public function indexAction()
    {
        $pageTitle = 'home';
        include __DIR__ . '/../views/index.php';
    }

    public function jokesAction()
    {
        $pageTitle = 'jokes';
        include __DIR__ . '/../views/jokes.php';
    }
}
