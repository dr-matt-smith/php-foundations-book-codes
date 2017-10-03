<?php
namespace Itb;

class MainController
{
    private $twig;

    public function __construct(\Twig\Environment $twig)
    {
        $this->twig = $twig;
    }

    public function indexAction()
    {
        $template = 'index.html.twig';
        $argsArray = [
            'pageTitle' => 'home'
        ];
        $html =  $this->twig->render($template, $argsArray);
        print $html;
    }

    public function jokesAction()
    {
        $template = 'jokes.html.twig';
        $argsArray = [
            'pageTitle' => 'jokes'
        ];
        $html =  $this->twig->render($template, $argsArray);
        print $html;
    }
}
