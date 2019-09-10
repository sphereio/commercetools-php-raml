<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Api\Models\Common\Reference;

interface CartReference extends Reference
{
    const FIELD_OBJ = 'obj';

    /**
     * @return null|Cart
     */
    public function getObj();

    public function setObj(?Cart $obj): void;
}
