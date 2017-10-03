<?php
class WebApplication
{
    public function run()
    {
        $this->indexAction();
    }

    private function indexAction()
    {
        $pageTitle = 'home';
        include __DIR__ . '/../views/home.php';
    }
}