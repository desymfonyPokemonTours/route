<?php

namespace Desymfony\Route\Domain\Exception;

class RouteNotFoundException extends \Exception
{
    public function __construct($routeId)
    {
        parent::__construct('There is no route with id: '.$routeId);
    }
}
