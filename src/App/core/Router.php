<?php

namespace App\core;

use App\core\View;

class Router {
    protected $routes = [];
    protected $params = [];

    public function __construct() {
        $routes = require 'src\App\config\routes.php';

        foreach ($routes as $key => $val) {
            $this->add($key, $val);
        }
    }

    public function add($route, $params) {
        $route = '#^'.$route.'$#';
        $this->routes[$route] = $params;
    }

    public function match() {
        $current_page = trim($_SERVER['REQUEST_URI'], '/');

        foreach ($this->routes as $route => $params) {
            if (preg_match($route, $current_page, $matches)) {
                $this->params = $params;
                return true;
            }
        }
        return false;
    }

    public function run() {
        if ($this->match()) {
            if (class_exists($path_to_controller = 'App\controllers\\'.ucfirst($this->params['controller']).'Controller')) {
                $action = $this->params['action'].'Action';

                if (method_exists($path_to_controller, $action)) {
                    $controller = new $path_to_controller($this->params);
                    $controller->$action();
                } else {
                    View::errorCode();
                }
            }  else {
                View::errorCode();
            }
        } else {
            View::errorCode();
        }
    }

    static function redirect($url) {
        header('location: '.$url);
        exit;
    }
}