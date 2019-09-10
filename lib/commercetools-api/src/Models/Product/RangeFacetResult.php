<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Product;

interface RangeFacetResult extends FacetResult
{
    const FIELD_RANGES = 'ranges';

    /**
     * @return null|FacetResultRangeCollection
     */
    public function getRanges();

    public function setRanges(?FacetResultRangeCollection $ranges): void;
}
