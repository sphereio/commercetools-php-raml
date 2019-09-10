<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Api\Models\Common\Money;
use Commercetools\Base\JsonObject;

interface TaxPortion extends JsonObject
{
    const FIELD_NAME = 'name';
    const FIELD_RATE = 'rate';
    const FIELD_AMOUNT = 'amount';

    /**
     * @return null|string
     */
    public function getName();

    /**
     * @return null|int
     */
    public function getRate();

    /**
     * @return null|Money
     */
    public function getAmount();

    public function setName(?string $name): void;

    public function setRate(?int $rate): void;

    public function setAmount(?Money $amount): void;
}
