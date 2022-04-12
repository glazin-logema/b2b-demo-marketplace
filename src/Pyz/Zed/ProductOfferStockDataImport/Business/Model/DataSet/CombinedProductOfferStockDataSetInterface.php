<?php

/**
 * This file is part of the Spryker Commerce OS.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Zed\ProductOfferStockDataImport\Business\Model\DataSet;

interface CombinedProductOfferStockDataSetInterface
{
    /**
     * @var string
     */
    public const PYZ_PRODUCT_OFFER_REFERENCE = 'product_offer_reference';

    /**
     * @var string
     */
    public const PYZ_STOCK_NAME = 'product_offer_stock.stock_name';

    /**
     * @var string
     */
    public const PYZ_QUANTITY = 'product_offer_stock.quantity';

    /**
     * @var string
     */
    public const PYZ_IS_NEVER_OUT_OF_STOCK = 'product_offer_stock.is_never_out_of_stock';

    /**
     * @var string
     */
    public const PYZ_STORE_NAME = 'merchant_product_offer_store.store_name';
}
