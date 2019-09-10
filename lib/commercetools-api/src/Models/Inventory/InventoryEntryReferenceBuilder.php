<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Inventory;

use Commercetools\Base\Builder;

/**
 * @implements Builder<InventoryEntryReference>
 */
final class InventoryEntryReferenceBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $typeId;

    /**
     * @var ?string
     */
    private $id;

    /**
     * @var InventoryEntry|?InventoryEntryBuilder
     */
    private $obj;

    public function __construct()
    {
    }

    /**
     * @return null|string
     */
    public function getTypeId()
    {
        return $this->typeId;
    }

    /**
     * @return null|string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return null|InventoryEntry
     */
    public function getObj()
    {
        return $this->obj instanceof InventoryEntryBuilder ? $this->obj->build() : $this->obj;
    }

    /**
     * @return $this
     */
    public function withTypeId(?string $typeId)
    {
        $this->typeId = $typeId;

        return $this;
    }

    /**
     * @return $this
     */
    public function withId(?string $id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return $this
     */
    public function withObj(?InventoryEntry $obj)
    {
        $this->obj = $obj;

        return $this;
    }

    /**
     * @return $this
     */
    public function withObjBuilder(?InventoryEntryBuilder $obj)
    {
        $this->obj = $obj;

        return $this;
    }

    public function build(): InventoryEntryReference
    {
        return new InventoryEntryReferenceModel(
            $this->typeId,
            $this->id,
            ($this->obj instanceof InventoryEntryBuilder ? $this->obj->build() : $this->obj)
        );
    }

    public static function of(): InventoryEntryReferenceBuilder
    {
        return new self();
    }
}
