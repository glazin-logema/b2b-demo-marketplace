<?php

/**
 * This file is part of the Spryker Commerce OS.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Client\AvailabilityStorage;

use Spryker\Client\AvailabilityStorage\AvailabilityStorageDependencyProvider as SprykerAvailabilityStorageDependencyProvider;
use Spryker\Client\ProductOfferAvailabilityStorage\Plugin\AvailabilityStorage\ProductOfferAvailabilityStorageStrategyPlugin;

class AvailabilityStorageDependencyProvider extends SprykerAvailabilityStorageDependencyProvider
{
    /**
     * @return array<\Spryker\Client\AvailabilityStorageExtension\Dependency\Plugin\AvailabilityStorageStrategyPluginInterface>
     */
    protected function getAvailabilityStorageStrategyPlugins(): array
    {
        return [
            new ProductOfferAvailabilityStorageStrategyPlugin(),
        ];
    }
}
