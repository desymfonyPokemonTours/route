<?php

namespace Desymfony\Route\Domain\Service;

use Desymfony\Route\Domain\Repository\RouteRepository;

class GetRoutesByTypeIdService
{
    /**
     * @var RouteRepository
     */
    private $routeRepository;

    public function __construct(RouteRepository $routeRepository)
    {
        $this->routeRepository = $routeRepository;
    }

    public function execute($typeId)
    {
        return $this->routeRepository->getByTypeId($typeId);
    }
}
