<?php
class WebApplication
{
    public function run()
    {
        $action = filter_input(INPUT_GET, 'action');

        $mainController = new MainController();
        switch($action){
            case 'jokes':
                $mainController->jokesAction();
                break;

            case 'index':
            default:
                $mainController->indexAction();
        }
    }
}
