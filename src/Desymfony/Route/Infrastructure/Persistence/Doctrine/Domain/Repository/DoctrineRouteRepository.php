<?php

namespace Desymfony\Route\Infrastructure\Persistence\Doctrine\Domain\Repository;

use Desymfony\Doctrine\EntityRepository\DesymfonyEntityRepository;
use Desymfony\Route\Domain\Exception\RouteNotFoundException;
use Desymfony\Route\Domain\Repository\RouteRepository;
use Desymfony\Route\Infrastructure\Persistence\Doctrine\Domain\Entity\DoctrineRoute;

class DoctrineRouteRepository extends DesymfonyEntityRepository implements RouteRepository
{
    public function getById($routeId)
    {
        $route = $this->find($routeId);

        if (null === $route) {
            throw new RouteNotFoundException($routeId);
        }

        return $route;
    }

    protected function getEntityNamespace()
    {
        return DoctrineRoute::class;
    }
}
