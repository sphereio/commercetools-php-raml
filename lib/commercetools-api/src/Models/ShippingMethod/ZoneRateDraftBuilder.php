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
 * @implements Builder<ZoneRateDraft>
 */
final class ZoneRateDraftBuilder implements Builder
{
    /**
     * @var ZoneResourceIdentifier|?ZoneResourceIdentifierBuilder
     */
    private $zone;

    /**
     * @var ?ShippingRateDraftCollection
     */
    private $shippingRates;

    public function __construct()
    {
    }

    /**
     * @return null|ZoneResourceIdentifier
     */
    public function getZone()
    {
        return $this->zone instanceof ZoneResourceIdentifierBuilder ? $this->zone->build() : $this->zone;
    }

    /**
     * @return null|ShippingRateDraftCollection
     */
    public function getShippingRates()
    {
        return $this->shippingRates;
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
    public function withShippingRates(?ShippingRateDraftCollection $shippingRates)
    {
        $this->shippingRates = $shippingRates;

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

    public function build(): ZoneRateDraft
    {
        return new ZoneRateDraftModel(
            ($this->zone instanceof ZoneResourceIdentifierBuilder ? $this->zone->build() : $this->zone),
            $this->shippingRates
        );
    }

    public static function of(): ZoneRateDraftBuilder
    {
        return new self();
    }
}