<?php
namespace Mindk\Fram\Request;
/**
 *Request processing class
 * @package Mindk\Fram
 */
class Request
{
    private static $request = null;

    /**
     * Request constructor.
     *
     */
    private function __construct()
    {
    }

    /**
     * Returns request
     *
     * @return Request
     */
    public static function getRequest(): self
    {
        if (null === self::$request) {
            self::$request = new self();
        }
        return self::$request;
    }


    /**
     * Return current Uri
     * @return string
     */
    public function getUri(): string
    {
        return $_SERVER["REQUEST_URI"];
    }

    /**
     * Return current metod
     * @return string
     */
    public function getMethod(): string
    {
        return $_SERVER["REQUEST_METHOD"];
    }
}


