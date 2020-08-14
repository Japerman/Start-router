<?php
/**
 * @ Package: Router
 * @ Class: RouterCommand
 * @ Author: Jose Perez <japerman@gmail.com>
 * @ URL: https://github.com/Japerman/start-router
 * @ Licence: The MIT License (MIT) - Copyright (c) - http://opensource.org/licenses/MIT
 */

namespace Start\Router;

use Exception;

class RouterException
{
    /**
     * @var bool $debug Debug mode
     */
    public static $debug = false;

    /**
     * Create Exception Class.
     *
     * @param $message
     *
     * @return string
     * @throws Exception
     */
    public function __construct($message)
    {
        if (self::$debug) {
            throw new Exception($message, 1);
        } else {
            die('<h2>Opps! An error occurred.</h2> ' . $message);
        }
    }
}
