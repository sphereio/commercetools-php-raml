<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Api\Models\Order\StagedOrderUpdateAction;

interface StagedOrderRemoveCustomLineItemAction extends StagedOrderUpdateAction
{
    const FIELD_CUSTOM_LINE_ITEM_ID = 'customLineItemId';

    /**
     * @return null|string
     */
    public function getCustomLineItemId();

    public function setCustomLineItemId(?string $customLineItemId): void;
}
