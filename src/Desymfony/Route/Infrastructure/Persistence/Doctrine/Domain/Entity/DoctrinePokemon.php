<?php

namespace Desymfony\Route\Infrastructure\Persistence\Doctrine\Domain\Entity;

class DoctrinePokemon
{
    /**
     * @var int
     */
    protected $id;

    /**
     * @var DoctrineRoute[]
     */
    protected $routes;

    /**
     * @var DoctrineType[]
     */
    protected $types;
}
