<?php

namespace Desymfony\Route\Domain\Service;

use Desymfony\Route\Domain\Repository\RouteRepository;

class GetRouteByIdService
{
    /**
     * @var RouteRepository
     */
    private $routeRepository;

    public function __construct(RouteRepository $routeRepository)
    {
        $this->routeRepository = $routeRepository;
    }

    public function execute($routeId)
    {
        return $this->routeRepository->getById($routeId);
    }
}
