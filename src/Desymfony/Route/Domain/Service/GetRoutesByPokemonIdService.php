<?php

namespace Desymfony\Route\Domain\Service;

use Desymfony\Route\Domain\Repository\RouteRepository;

class GetRoutesByPokemonIdService
{
    /**
     * @var RouteRepository
     */
    private $routeRepository;

    public function __construct(RouteRepository $routeRepository)
    {
        $this->routeRepository = $routeRepository;
    }

    public function execute($pokemonId)
    {
        return $this->routeRepository->getByPokemonId($pokemonId);
    }
}
