<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Cart\ShippingInfo;

interface OrderShippingInfoSetMessage extends Message
{
    const FIELD_SHIPPING_INFO = 'shippingInfo';
    const FIELD_OLD_SHIPPING_INFO = 'oldShippingInfo';

    /**
     * @return null|ShippingInfo
     */
    public function getShippingInfo();

    /**
     * @return null|ShippingInfo
     */
    public function getOldShippingInfo();

    public function setShippingInfo(?ShippingInfo $shippingInfo): void;

    public function setOldShippingInfo(?ShippingInfo $oldShippingInfo): void;
}