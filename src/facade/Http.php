<?php

namespace YdOpen\ApiStore\facade;

class Http
{
    public static function __callStatic($name, $arguments)
    {
        return call_user_func_array([new \YdOpen\ApiStore\Http(), $name], $arguments);
    }
}
