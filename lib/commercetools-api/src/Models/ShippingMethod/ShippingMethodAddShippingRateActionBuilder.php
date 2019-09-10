<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ShippingMethod;

use Commercetools\Api\Models\Zone\ZoneResourceIdentifier;
use Commercetools\Api\Models\Zone\ZoneResourceIdentifierBuilder;
use Commercetools\Base\Builder;

/**
 * @implements Builder<ShippingMethodAddShippingRateAction>
 */
final class ShippingMethodAddShippingRateActionBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $action;

    /**
     * @var ShippingRateDraft|?ShippingRateDraftBuilder
     */
    private $shippingRate;

    /**
     * @var ZoneResourceIdentifier|?ZoneResourceIdentifierBuilder
     */
    private $zone;

    public function __construct()
    {
    }

    /**
     * @return null|string
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * @return null|ShippingRateDraft
     */
    public function getShippingRate()
    {
        return $this->shippingRate instanceof ShippingRateDraftBuilder ? $this->shippingRate->build() : $this->shippingRate;
    }

    /**
     * @return null|ZoneResourceIdentifier
     */
    public function getZone()
    {
        return $this->zone instanceof ZoneResourceIdentifierBuilder ? $this->zone->build() : $this->zone;
    }

    /**
     * @return $this
     */
    public function withAction(?string $action)
    {
        $this->action = $action;

        return $this;
    }

    /**
     * @return $this
     */
    public function withShippingRate(?ShippingRateDraft $shippingRate)
    {
        $this->shippingRate = $shippingRate;

        return $this;
    }

    /**
     * @return $this
     */
    public function withZone(?ZoneResourceIdentifier $zone)
    {
        $this->zone = $zone;

        return $this;
    }

    /**
     * @return $this
     */
    public function withShippingRateBuilder(?ShippingRateDraftBuilder $shippingRate)
    {
        $this->shippingRate = $shippingRate;

        return $this;
    }

    /**
     * @return $this
     */
    public function withZoneBuilder(?ZoneResourceIdentifierBuilder $zone)
    {
        $this->zone = $zone;

        return $this;
    }

    public function build(): ShippingMethodAddShippingRateAction
    {
        return new ShippingMethodAddShippingRateActionModel(
            $this->action,
            ($this->shippingRate instanceof ShippingRateDraftBuilder ? $this->shippingRate->build() : $this->shippingRate),
            ($this->zone instanceof ZoneResourceIdentifierBuilder ? $this->zone->build() : $this->zone)
        );
    }

    public static function of(): ShippingMethodAddShippingRateActionBuilder
    {
        return new self();
    }
}
