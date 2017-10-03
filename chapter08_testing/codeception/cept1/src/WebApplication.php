<?php
namespace Itb;

class WebApplication
{
    const PATH_TO_TEMPLATES = __DIR__ . '/../views';

    private $mainController;
    private $userController;

    public function __construct()
    {
        $twig = new \Twig\Environment(new \Twig_Loader_Filesystem(self::PATH_TO_TEMPLATES));
        $this->mainController = new MainController($twig);
        $this->userController = new UserController($twig);
    }

    public function run()
    {
        $action = filter_input(INPUT_GET, 'action');

        switch($action){
            case 'login':
                $this->userController->loginAction();
                break;

            case 'loginProcess':
                $this->userController->loginProcessAction();
                break;

            case 'jokes':
                $this->mainController->jokesAction();
                break;

            case 'index':
            default:
                $this->mainController->indexAction();
        }
    }
}
