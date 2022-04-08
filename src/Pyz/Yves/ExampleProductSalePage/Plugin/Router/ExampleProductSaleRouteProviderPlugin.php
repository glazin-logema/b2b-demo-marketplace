<?php

/**
 * This file is part of the Spryker Commerce OS.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Yves\ExampleProductSalePage\Plugin\Router;

use Spryker\Yves\Router\Plugin\RouteProvider\AbstractRouteProviderPlugin;
use Spryker\Yves\Router\Route\RouteCollection;

class ExampleProductSaleRouteProviderPlugin extends AbstractRouteProviderPlugin
{
    /**
     * @var string
     */
    public const PYZ_ROUTE_NAME_SALE = 'sale';

    /**
     * @param \Spryker\Yves\Router\Route\RouteCollection $routeCollection
     *
     * @return \Spryker\Yves\Router\Route\RouteCollection
     */
    public function addRoutes(RouteCollection $routeCollection): RouteCollection
    {
        $route = $this->buildRoute('/outlet{categoryPath}', 'ExampleProductSalePage', 'Sale', 'indexPyzAction');
        $route = $route->setRequirement('categoryPath', '\/.+');
        $route = $route->setDefault('categoryPath', null);

        $routeCollection->add(static::PYZ_ROUTE_NAME_SALE, $route);

        return $routeCollection;
    }
}
