<?php

namespace istiaqhossain\phpmvc;

use istiaqhossain\phpmvc\Application;
use istiaqhossain\phpmvc\middlewares\BaseMiddleware;

class Controller
{
    public string $layout = 'default';

    public string $action =  '';

    /**
     * @var \istiaqhossain\phpmvc\middlewares\BaseMiddleware[]
     */
    protected array $middlewares = [];
    
    public function render($view, $params = [])
    {
        return Application::$app->view->renderView($view, $params);
    }

    public function setLayout($layout)
    {
        $this->layout = $layout;
    }

    public function registerMiddleware(BaseMiddleware $middleware)
    {
        $this->middlewares[] = $middleware;
    }

    public function getMiddlewares(): array
    {
        return $this->middlewares;
    }
}
