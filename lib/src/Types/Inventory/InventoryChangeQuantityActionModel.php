<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Inventory;

use Commercetools\Types\Inventory\InventoryEntryUpdateActionModel;

class InventoryChangeQuantityActionModel extends InventoryEntryUpdateActionModel implements InventoryChangeQuantityAction {
    const DISCRIMINATOR_VALUE = 'changeQuantity';

    /**
     * @var int
     */
    protected $quantity;

    /**
     * @return int
     */
    public function getQuantity()
    {
        if (is_null($this->quantity)) {
            $value = $this->raw(InventoryChangeQuantityAction::FIELD_QUANTITY);
            $value = (int)$value;
            $this->quantity = $value;
        }
        return $this->quantity;
    }

    /**
     * @param int $quantity
     * @return $this
     */
    public function setQuantity(int $quantity)
    {
        $this->quantity = (int)$quantity;

        return $this;
    }

}