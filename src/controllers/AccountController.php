<?php

namespace App\controllers;

use App\core\Controller;

class AccountController extends Controller {
//    public function __construct($route) {
//        parent::__construct($route);
//        $this->view->layout = 'admin';
//    }

    public function loginAction() {
        if (!empty($_POST)) {
//            $this->view->location('/account/register');
            $this->view->message('success', 'Успешно отправлено');
        }

        $this->view->render('Страница входа');
    }

    public function registerAction() {
        $this->view->render('Страница регистрации');
    }
}