<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Order;

use Commercetools\Base\JsonObjectModel;

final class DeliveryItemModel extends JsonObjectModel implements DeliveryItem
{
    /**
     * @var ?int
     */
    protected $quantity;

    /**
     * @var ?string
     */
    protected $id;

    public function __construct(
        int $quantity = null,
        string $id = null
    ) {
        $this->quantity = $quantity;
        $this->id = $id;
    }

    /**
     * @return null|int
     */
    public function getQuantity()
    {
        if (is_null($this->quantity)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(DeliveryItem::FIELD_QUANTITY);
            if (is_null($data)) {
                return null;
            }
            $this->quantity = (int) $data;
        }

        return $this->quantity;
    }

    /**
     * @return null|string
     */
    public function getId()
    {
        if (is_null($this->id)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(DeliveryItem::FIELD_ID);
            if (is_null($data)) {
                return null;
            }
            $this->id = (string) $data;
        }

        return $this->id;
    }

    public function setQuantity(?int $quantity): void
    {
        $this->quantity = $quantity;
    }

    public function setId(?string $id): void
    {
        $this->id = $id;
    }
}
