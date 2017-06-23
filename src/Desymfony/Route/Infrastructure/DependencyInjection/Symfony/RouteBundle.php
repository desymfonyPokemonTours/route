<?php

namespace Desymfony\Route\Infrastructure\DependencyInjection\Symfony;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class RouteBundle extends Bundle
{
    /**
     * Returns the bundle's container extension class.
     *
     * @return string
     */
    protected function getContainerExtensionClass()
    {
        return RouteExtension::class;
    }
}
