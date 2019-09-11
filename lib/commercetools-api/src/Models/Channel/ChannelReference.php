<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Channel;

use Commercetools\Api\Models\Common\Reference;

interface ChannelReference extends Reference
{
    const FIELD_OBJ = 'obj';

    /**
     * @return null|Channel
     */
    public function getObj();

    public function setObj(?Channel $obj): void;
}