<?php

namespace Desymfony\Route\Domain\Repository;

use Desymfony\Route\Domain\Entity\Route;
use Desymfony\Route\Domain\Exception\RouteNotFoundException;

interface RouteRepository
{
    /**
     * @param int $routeId
     * @return Route
     * @throws RouteNotFoundException
     */
    public function getById($routeId);
}
