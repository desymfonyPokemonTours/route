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

    public function getByPokemonId($pokemonId)
    {
        $queryBuilder = $this->createQueryBuilder('route');

        $queryBuilder
            ->innerJoin('route.pokemons', 'pokemon')
            ->andWhere('pokemon.id = :pokemonId')
            ->setParameter(':pokemonId', $pokemonId)
        ;

        return $queryBuilder->getQuery()->getResult();
    }

    public function getByTypeId($typeId)
    {
        $queryBuilder = $this->createQueryBuilder('route');

        $queryBuilder
            ->innerJoin('route.pokemons', 'pokemon')
            ->innerJoin('pokemon.types', 'type')
            ->andWhere('type.id = :typeId')
            ->setParameter(':typeId', $typeId)
        ;

        return $queryBuilder->getQuery()->getResult();
    }

    protected function getEntityNamespace()
    {
        return DoctrineRoute::class;
    }
}
