<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Zone;

use Commercetools\Api\Models\Common\Reference;

interface ZoneReference extends Reference
{
    const FIELD_OBJ = 'obj';

    /**
     * @return null|Zone
     */
    public function getObj();

    public function setObj(?Zone $obj): void;
}
