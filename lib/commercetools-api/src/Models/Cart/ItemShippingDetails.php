<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Base\JsonObject;

interface ItemShippingDetails extends JsonObject
{
    const FIELD_TARGETS = 'targets';
    const FIELD_VALID = 'valid';

    /**
     * @return null|ItemShippingTargetCollection
     */
    public function getTargets();

    /**
     * @return null|bool
     */
    public function getValid();

    public function setTargets(?ItemShippingTargetCollection $targets): void;

    public function setValid(?bool $valid): void;
}