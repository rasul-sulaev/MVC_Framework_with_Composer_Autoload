<?php

namespace App\controllers;

use App\core\Controller;

class MainController extends Controller {
    public function indexAction() {

        $vars = [
            'news' => $this->model->getNews()
        ];

        $this->view->render('Страница главная', $vars);
    }

    public function contactsAction() {
        $this->view->render('Страница Контакты');
    }
}