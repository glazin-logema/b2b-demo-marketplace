<?php

/**
 * This file is part of the Spryker Commerce OS.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Zed\ProductOfferStockDataImport\Business\Model\Condition;

use Pyz\Zed\DataImport\Business\CombinedProduct\DataSet\CombinedProductMandatoryColumnCondition;
use Pyz\Zed\ProductOfferStockDataImport\Business\Model\DataSet\CombinedProductOfferStockDataSetInterface;

class CombinedProductOfferStockMandatoryColumnCondition extends CombinedProductMandatoryColumnCondition
{
    /**
     * @return array<string>
     */
    protected function getMandatoryColumns(): array
    {
        return [
            CombinedProductOfferStockDataSetInterface::PYZ_STOCK_NAME,
            CombinedProductOfferStockDataSetInterface::PYZ_QUANTITY,
            CombinedProductOfferStockDataSetInterface::PYZ_IS_NEVER_OUT_OF_STOCK,
        ];
    }
}
