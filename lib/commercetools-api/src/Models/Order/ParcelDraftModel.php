<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Order;

use Commercetools\Base\JsonObjectModel;
use stdClass;

final class ParcelDraftModel extends JsonObjectModel implements ParcelDraft
{
    /**
     * @var ?DeliveryItemCollection
     */
    protected $items;

    /**
     * @var ?TrackingData
     */
    protected $trackingData;

    /**
     * @var ?ParcelMeasurements
     */
    protected $measurements;

    public function __construct(
        DeliveryItemCollection $items = null,
        TrackingData $trackingData = null,
        ParcelMeasurements $measurements = null
    ) {
        $this->items = $items;
        $this->trackingData = $trackingData;
        $this->measurements = $measurements;
    }

    /**
     * @return null|DeliveryItemCollection
     */
    public function getItems()
    {
        if (is_null($this->items)) {
            /** @psalm-var ?array<int, stdClass> $data */
            $data = $this->raw(ParcelDraft::FIELD_ITEMS);
            if (is_null($data)) {
                return null;
            }
            $this->items = DeliveryItemCollection::fromArray($data);
        }

        return $this->items;
    }

    /**
     * @return null|TrackingData
     */
    public function getTrackingData()
    {
        if (is_null($this->trackingData)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(ParcelDraft::FIELD_TRACKING_DATA);
            if (is_null($data)) {
                return null;
            }

            $this->trackingData = TrackingDataModel::of($data);
        }

        return $this->trackingData;
    }

    /**
     * @return null|ParcelMeasurements
     */
    public function getMeasurements()
    {
        if (is_null($this->measurements)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(ParcelDraft::FIELD_MEASUREMENTS);
            if (is_null($data)) {
                return null;
            }

            $this->measurements = ParcelMeasurementsModel::of($data);
        }

        return $this->measurements;
    }

    public function setItems(?DeliveryItemCollection $items): void
    {
        $this->items = $items;
    }

    public function setTrackingData(?TrackingData $trackingData): void
    {
        $this->trackingData = $trackingData;
    }

    public function setMeasurements(?ParcelMeasurements $measurements): void
    {
        $this->measurements = $measurements;
    }
}
