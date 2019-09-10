<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\CartDiscount;

use Commercetools\Base\JsonObject;

interface CartDiscountUpdate extends JsonObject
{
    const FIELD_VERSION = 'version';
    const FIELD_ACTIONS = 'actions';

    /**
     * @return null|int
     */
    public function getVersion();

    /**
     * @return null|CartDiscountUpdateActionCollection
     */
    public function getActions();

    public function setVersion(?int $version): void;

    public function setActions(?CartDiscountUpdateActionCollection $actions): void;
}
