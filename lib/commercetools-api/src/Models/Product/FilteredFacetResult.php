<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Product;

interface FilteredFacetResult extends FacetResult
{
    const FIELD_COUNT = 'count';
    const FIELD_PRODUCT_COUNT = 'productCount';

    /**
     * @return null|int
     */
    public function getCount();

    /**
     * @return null|int
     */
    public function getProductCount();

    public function setCount(?int $count): void;

    public function setProductCount(?int $productCount): void;
}
