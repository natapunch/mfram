<?php

namespace Mindk\Fram\Router;

/**
 * Class Route
 * @package Mindk\Fram\Router
 */
class Route
{
    /**
     * @var Route name
     */
    public $name;

    /**
     * @var Controller name
     */
    public $controller;

    /**
     * @var Method name
     */
    public $method;

    /**
     * @var array   Parsed params
     */
    public $params = [];

}