<?php

/**
 * This file is part of the Spryker Commerce OS.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Glue\CartsRestApi;

use Spryker\Glue\CartsRestApi\CartsRestApiDependencyProvider as SprykerCartsRestApiDependencyProvider;
use Spryker\Glue\CompanyUsersRestApi\Plugin\CartsRestApi\CompanyUserCustomerExpanderPlugin;
use Spryker\Glue\ConfigurableBundleCartsRestApi\Plugin\CartsRestApi\ConfiguredBundleItemsAttributesMapperPlugin;
use Spryker\Glue\DiscountPromotionsRestApi\Plugin\CartsRestApi\DiscountPromotionCartItemExpanderPlugin;
use Spryker\Glue\MerchantProductOffersRestApi\Plugin\CartsRestApi\MerchantProductOfferCartItemExpanderPlugin;
use Spryker\Glue\MerchantProductOffersRestApi\Plugin\CartsRestApi\MerchantProductOfferRestCartItemsAttributesMapperPlugin;
use Spryker\Glue\MerchantProductsRestApi\Plugin\CartsRestApi\MerchantProductCartItemExpanderPlugin;
use Spryker\Glue\ProductBundleCartsRestApi\Plugin\CartsRestApi\ProductBundleCartItemFilterPlugin;
use Spryker\Glue\ProductMeasurementUnitsRestApi\Plugin\CartsRestApi\SalesUnitCartItemExpanderPlugin;
use Spryker\Glue\ProductMeasurementUnitsRestApi\Plugin\CartsRestApi\SalesUnitsRestCartItemsAttributesMapperPlugin;
use Spryker\Glue\ProductOptionsRestApi\Plugin\CartsRestApi\ProductOptionCartItemExpanderPlugin;
use Spryker\Glue\ProductOptionsRestApi\Plugin\CartsRestApi\ProductOptionRestCartItemsAttributesMapperPlugin;
use Spryker\Glue\SalesOrderThresholdsRestApi\Plugin\CartsRestApi\SalesOrderThresholdRestCartAttributesMapperPlugin;

class CartsRestApiDependencyProvider extends SprykerCartsRestApiDependencyProvider
{
    /**
     * @return \Spryker\Glue\CartsRestApiExtension\Dependency\Plugin\CustomerExpanderPluginInterface[]
     */
    protected function getCustomerExpanderPlugins(): array
    {
        return [
            new CompanyUserCustomerExpanderPlugin(),
        ];
    }

    /**
     * @return \Spryker\Glue\CartsRestApiExtension\Dependency\Plugin\RestCartItemsAttributesMapperPluginInterface[]
     */
    protected function getRestCartItemsAttributesMapperPlugins(): array
    {
        return [
            new ProductOptionRestCartItemsAttributesMapperPlugin(),
            new SalesUnitsRestCartItemsAttributesMapperPlugin(),
            new MerchantProductOfferRestCartItemsAttributesMapperPlugin(),
            new ConfiguredBundleItemsAttributesMapperPlugin(),
        ];
    }

    /**
     * @return \Spryker\Glue\CartsRestApiExtension\Dependency\Plugin\CartItemExpanderPluginInterface[]
     */
    protected function getCartItemExpanderPlugins(): array
    {
        return [
            new ProductOptionCartItemExpanderPlugin(),
            new DiscountPromotionCartItemExpanderPlugin(),
            new SalesUnitCartItemExpanderPlugin(),
            new MerchantProductCartItemExpanderPlugin(),
            new MerchantProductOfferCartItemExpanderPlugin(),
        ];
    }

    /**
     * @return \Spryker\Glue\CartsRestApiExtension\Dependency\Plugin\CartItemFilterPluginInterface[]
     */
    protected function getCartItemFilterPlugins(): array
    {
        return [
            new ProductBundleCartItemFilterPlugin(),
        ];
    }

    /**
     * @return array<\Spryker\Glue\CartsRestApiExtension\Dependency\Plugin\RestCartAttributesMapperPluginInterface>
     */
    protected function getRestCartAttributesMapperPlugins(): array
    {
        return [
            new SalesOrderThresholdRestCartAttributesMapperPlugin(),
        ];
    }
}
