<?php

/**
 * This file is part of the Spryker Commerce OS.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Zed\Availability;

use Spryker\Zed\Availability\AvailabilityDependencyProvider as SprykerAvailabilityDependencyProvider;
use Spryker\Zed\Availability\Communication\Plugin\Cart\ProductConcreteBatchAvailabilityStrategyPlugin;
use Spryker\Zed\ProductOffer\Communication\Plugin\Cart\ProductOfferCartItemQuantityCounterStrategyPlugin;
use Spryker\Zed\ProductOfferAvailability\Communication\Plugin\Availability\ProductOfferAvailabilityStrategyPlugin;

class AvailabilityDependencyProvider extends SprykerAvailabilityDependencyProvider
{
    /**
     * @return \Spryker\Zed\AvailabilityExtension\Dependency\Plugin\BatchAvailabilityStrategyPluginInterface[]
     */
    protected function getBatchAvailabilityStrategyPlugins(): array
    {
        return [
            /**
             * ProductConcreteBatchAvailabilityStrategyPlugin needs to be after all other implementations.
             */
            new ProductConcreteBatchAvailabilityStrategyPlugin(),
        ];
    }

    /**
     * @return \Spryker\Zed\AvailabilityExtension\Dependency\Plugin\AvailabilityStrategyPluginInterface[]
     */
    protected function getAvailabilityStrategyPlugins(): array
    {
        return [
            new ProductOfferAvailabilityStrategyPlugin(),
        ];
    }

    /**
     * @return array<\Spryker\Zed\AvailabilityExtension\Dependency\Plugin\CartItemQuantityCounterStrategyPluginInterface>
     */
    protected function getCartItemQuantityCounterStrategyPlugins(): array
    {
        return [
            new ProductOfferCartItemQuantityCounterStrategyPlugin(),
        ];
    }
}
