<?php
namespace app\core;

use app\controllers\Controller;

class Application
{
    public static Application $app;
    public static string $ROOT_DIR;
    public Request $request;
    public Router $router;
    public Response $response;
    public Controller $controller;

    public function __construct($rootPath)
    {
        self::$app = $this;
        self::$ROOT_DIR = $rootPath;
        $this->request = new Request;
        $this->response = new Response;
        $this->router = new Router($this->request, $this->response);
    }

    public function run()
    {
        echo $this->router->resolve();
    }

    public function getController()
    {
        return $this->controller;
    }

    public function setController(Controller $controller)
    {
        $this->controller = $controller;
    }
}
