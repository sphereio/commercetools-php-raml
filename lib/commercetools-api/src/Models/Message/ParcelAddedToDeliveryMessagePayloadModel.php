<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Order\Delivery;
use Commercetools\Api\Models\Order\DeliveryModel;
use Commercetools\Api\Models\Order\Parcel;
use Commercetools\Api\Models\Order\ParcelModel;
use Commercetools\Base\JsonObjectModel;
use stdClass;

final class ParcelAddedToDeliveryMessagePayloadModel extends JsonObjectModel implements ParcelAddedToDeliveryMessagePayload
{
    const DISCRIMINATOR_VALUE = 'ParcelAddedToDelivery';

    /**
     * @var ?string
     */
    protected $type;

    /**
     * @var ?Delivery
     */
    protected $delivery;

    /**
     * @var ?Parcel
     */
    protected $parcel;

    public function __construct(
        string $type = null,
        Delivery $delivery = null,
        Parcel $parcel = null
    ) {
        $this->type = $type;
        $this->delivery = $delivery;
        $this->parcel = $parcel;
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
     * @return null|Delivery
     */
    public function getDelivery()
    {
        if (is_null($this->delivery)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(ParcelAddedToDeliveryMessagePayload::FIELD_DELIVERY);
            if (is_null($data)) {
                return null;
            }

            $this->delivery = DeliveryModel::of($data);
        }

        return $this->delivery;
    }

    /**
     * @return null|Parcel
     */
    public function getParcel()
    {
        if (is_null($this->parcel)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(ParcelAddedToDeliveryMessagePayload::FIELD_PARCEL);
            if (is_null($data)) {
                return null;
            }

            $this->parcel = ParcelModel::of($data);
        }

        return $this->parcel;
    }

    public function setType(?string $type): void
    {
        $this->type = $type;
    }

    public function setDelivery(?Delivery $delivery): void
    {
        $this->delivery = $delivery;
    }

    public function setParcel(?Parcel $parcel): void
    {
        $this->parcel = $parcel;
    }
}
