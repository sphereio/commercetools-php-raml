<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\DiscountCode\DiscountCodeReference;

interface OrderDiscountCodeStateSetMessagePayload extends MessagePayload
{
    const FIELD_DISCOUNT_CODE = 'discountCode';
    const FIELD_STATE = 'state';
    const FIELD_OLD_STATE = 'oldState';

    /**
     * @return null|DiscountCodeReference
     */
    public function getDiscountCode();

    /**
     * @return null|string
     */
    public function getState();

    /**
     * @return null|string
     */
    public function getOldState();

    public function setDiscountCode(?DiscountCodeReference $discountCode): void;

    public function setState(?string $state): void;

    public function setOldState(?string $oldState): void;
}
