<?php
namespace Itb;

class UserController
{
    private $twig;

    public function __construct(\Twig\Environment $twig)
    {
        $this->twig = $twig;
    }

    public function loginAction()
    {
        $template = 'login.html.twig';
        $argsArray = [
            'pageTitle' => 'login'
        ];
        $html = $this->twig->render($template, $argsArray);
        print $html;
    }

    public function loginProcessAction()
    {
        $username = filter_input(INPUT_POST, 'username');
        $password = filter_input(INPUT_POST, 'password');
        
        // default template - error        
        $template = 'error.html.twig';
        $argsArray = [
            'message' => 'bad username or password - please try again'
        ];
        
        //----- if valid login, we redirect to procesValid login
        if($this->validCredentials($username, $password)){
            $template = 'userHome.html.twig';

            $argsArray = [
                'username' => $username
            ];
        }
        
        $html = $this->twig->render($template, $argsArray);
        print $html;
    }
    
    private function validCredentials($username, $password)
    {
        if('matt' == $username && 'smith' == $password){
            return true;
        }

        if('admin' == $username && 'admin' == $password){
            return true;
        }

        // if we get here, then there was NOT a valid username/password combination
        return false;
    }
}

