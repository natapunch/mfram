<?php

namespace Mindk\Fram;

use Mindk\Fram\Router\Router;
use Mindk\Fram\Request\Request;

/**
 * Class Application
 * @package Mindk\Fram
 */
class Application
{
public $config=[];

//    public function start()
//    {
//        $request = Request::getRequest();
//        $router = new Router(require __DIR__ . "/../config/routes.php");
//    }
    /**
     * Application constructor.
     */
    public function __construct($config=[])
    {
        $this->config=$config;
    }

        /**
     *Process the request
     */
    public function run()
    {
    $router=new Router($this->config['routes']);
    $request=Request::getRequest();
    $route=$router->getRoute($request);

    echo "pre>";
    print_r($route);
    echo "</pre>";
    }
    /**
     *Close active conections
     */
    public function destruct()
    {
    unset ($this->config);
    }
}