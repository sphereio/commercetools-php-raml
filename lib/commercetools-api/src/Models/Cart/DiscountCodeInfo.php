<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Api\Models\DiscountCode\DiscountCodeReference;
use Commercetools\Base\JsonObject;

interface DiscountCodeInfo extends JsonObject
{
    const FIELD_DISCOUNT_CODE = 'discountCode';
    const FIELD_STATE = 'state';

    /**
     * @return null|DiscountCodeReference
     */
    public function getDiscountCode();

    /**
     * @return null|string
     */
    public function getState();

    public function setDiscountCode(?DiscountCodeReference $discountCode): void;

    public function setState(?string $state): void;
}