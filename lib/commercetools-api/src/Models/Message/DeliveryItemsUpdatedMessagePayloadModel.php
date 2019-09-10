<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Order\DeliveryItemCollection;
use Commercetools\Base\JsonObjectModel;
use stdClass;

final class DeliveryItemsUpdatedMessagePayloadModel extends JsonObjectModel implements DeliveryItemsUpdatedMessagePayload
{
    const DISCRIMINATOR_VALUE = 'DeliveryItemsUpdated';

    /**
     * @var ?string
     */
    protected $type;

    /**
     * @var ?string
     */
    protected $deliveryId;

    /**
     * @var ?DeliveryItemCollection
     */
    protected $oldItems;

    /**
     * @var ?DeliveryItemCollection
     */
    protected $items;

    public function __construct(
        string $type = null,
        string $deliveryId = null,
        DeliveryItemCollection $oldItems = null,
        DeliveryItemCollection $items = null
    ) {
        $this->type = $type;
        $this->deliveryId = $deliveryId;
        $this->oldItems = $oldItems;
        $this->items = $items;
    }

    /**
     * @return null|string
     */
    public function getType()
    {
        if (is_null($this->type)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(MessagePayload::FIELD_TYPE);
            if (is_null($data)) {
                return null;
            }
            $this->type = (string) $data;
        }

        return $this->type;
    }

    /**
     * @return null|string
     */
    public function getDeliveryId()
    {
        if (is_null($this->deliveryId)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(DeliveryItemsUpdatedMessagePayload::FIELD_DELIVERY_ID);
            if (is_null($data)) {
                return null;
            }
            $this->deliveryId = (string) $data;
        }

        return $this->deliveryId;
    }

    /**
     * @return null|DeliveryItemCollection
     */
    public function getOldItems()
    {
        if (is_null($this->oldItems)) {
            /** @psalm-var ?array<int, stdClass> $data */
            $data = $this->raw(DeliveryItemsUpdatedMessagePayload::FIELD_OLD_ITEMS);
            if (is_null($data)) {
                return null;
            }
            $this->oldItems = DeliveryItemCollection::fromArray($data);
        }

        return $this->oldItems;
    }

    /**
     * @return null|DeliveryItemCollection
     */
    public function getItems()
    {
        if (is_null($this->items)) {
            /** @psalm-var ?array<int, stdClass> $data */
            $data = $this->raw(DeliveryItemsUpdatedMessagePayload::FIELD_ITEMS);
            if (is_null($data)) {
                return null;
            }
            $this->items = DeliveryItemCollection::fromArray($data);
        }

        return $this->items;
    }

    public function setType(?string $type): void
    {
        $this->type = $type;
    }

    public function setDeliveryId(?string $deliveryId): void
    {
        $this->deliveryId = $deliveryId;
    }

    public function setOldItems(?DeliveryItemCollection $oldItems): void
    {
        $this->oldItems = $oldItems;
    }

    public function setItems(?DeliveryItemCollection $items): void
    {
        $this->items = $items;
    }
}
