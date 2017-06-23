<?php

namespace Desymfony\Route\Infrastructure\Persistence\Doctrine\Domain\Entity;

class DoctrineType
{
    /**
     * @var int
     */
    protected $id;

    /**
     * @var DoctrinePokemon[]
     */
    protected $pokemons;
}
