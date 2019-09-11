<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Order;

use Commercetools\Base\JsonObjectModel;

final class TrackingDataModel extends JsonObjectModel implements TrackingData
{
    /**
     * @var ?bool
     */
    protected $isReturn;

    /**
     * @var ?string
     */
    protected $carrier;

    /**
     * @var ?string
     */
    protected $providerTransaction;

    /**
     * @var ?string
     */
    protected $provider;

    /**
     * @var ?string
     */
    protected $trackingId;

    public function __construct(
        bool $isReturn = null,
        string $carrier = null,
        string $providerTransaction = null,
        string $provider = null,
        string $trackingId = null
    ) {
        $this->isReturn = $isReturn;
        $this->carrier = $carrier;
        $this->providerTransaction = $providerTransaction;
        $this->provider = $provider;
        $this->trackingId = $trackingId;
    }

    /**
     * @return null|bool
     */
    public function getIsReturn()
    {
        if (is_null($this->isReturn)) {
            /** @psalm-var ?bool $data */
            $data = $this->raw(TrackingData::FIELD_IS_RETURN);
            if (is_null($data)) {
                return null;
            }
            $this->isReturn = (bool) $data;
        }

        return $this->isReturn;
    }

    /**
     * @return null|string
     */
    public function getCarrier()
    {
        if (is_null($this->carrier)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(TrackingData::FIELD_CARRIER);
            if (is_null($data)) {
                return null;
            }
            $this->carrier = (string) $data;
        }

        return $this->carrier;
    }

    /**
     * @return null|string
     */
    public function getProviderTransaction()
    {
        if (is_null($this->providerTransaction)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(TrackingData::FIELD_PROVIDER_TRANSACTION);
            if (is_null($data)) {
                return null;
            }
            $this->providerTransaction = (string) $data;
        }

        return $this->providerTransaction;
    }

    /**
     * @return null|string
     */
    public function getProvider()
    {
        if (is_null($this->provider)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(TrackingData::FIELD_PROVIDER);
            if (is_null($data)) {
                return null;
            }
            $this->provider = (string) $data;
        }

        return $this->provider;
    }

    /**
     * @return null|string
     */
    public function getTrackingId()
    {
        if (is_null($this->trackingId)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(TrackingData::FIELD_TRACKING_ID);
            if (is_null($data)) {
                return null;
            }
            $this->trackingId = (string) $data;
        }

        return $this->trackingId;
    }

    public function setIsReturn(?bool $isReturn): void
    {
        $this->isReturn = $isReturn;
    }

    public function setCarrier(?string $carrier): void
    {
        $this->carrier = $carrier;
    }

    public function setProviderTransaction(?string $providerTransaction): void
    {
        $this->providerTransaction = $providerTransaction;
    }

    public function setProvider(?string $provider): void
    {
        $this->provider = $provider;
    }

    public function setTrackingId(?string $trackingId): void
    {
        $this->trackingId = $trackingId;
    }
}