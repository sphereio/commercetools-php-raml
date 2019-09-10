<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Base\JsonObject;

interface DiscountedLineItemPriceForQuantity extends JsonObject
{
    const FIELD_QUANTITY = 'quantity';
    const FIELD_DISCOUNTED_PRICE = 'discountedPrice';

    /**
     * @return null|int
     */
    public function getQuantity();

    /**
     * @return null|DiscountedLineItemPrice
     */
    public function getDiscountedPrice();

    public function setQuantity(?int $quantity): void;

    public function setDiscountedPrice(?DiscountedLineItemPrice $discountedPrice): void;
}
