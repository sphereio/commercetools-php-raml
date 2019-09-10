<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Product;

use Commercetools\Base\JsonObjectModel;

final class ProductVariantChannelAvailabilityModel extends JsonObjectModel implements ProductVariantChannelAvailability
{
    /**
     * @var ?int
     */
    protected $availableQuantity;

    /**
     * @var ?int
     */
    protected $restockableInDays;

    /**
     * @var ?bool
     */
    protected $isOnStock;

    public function __construct(
        int $availableQuantity = null,
        int $restockableInDays = null,
        bool $isOnStock = null
    ) {
        $this->availableQuantity = $availableQuantity;
        $this->restockableInDays = $restockableInDays;
        $this->isOnStock = $isOnStock;
    }

    /**
     * @return null|int
     */
    public function getAvailableQuantity()
    {
        if (is_null($this->availableQuantity)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(ProductVariantChannelAvailability::FIELD_AVAILABLE_QUANTITY);
            if (is_null($data)) {
                return null;
            }
            $this->availableQuantity = (int) $data;
        }

        return $this->availableQuantity;
    }

    /**
     * @return null|int
     */
    public function getRestockableInDays()
    {
        if (is_null($this->restockableInDays)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(ProductVariantChannelAvailability::FIELD_RESTOCKABLE_IN_DAYS);
            if (is_null($data)) {
                return null;
            }
            $this->restockableInDays = (int) $data;
        }

        return $this->restockableInDays;
    }

    /**
     * @return null|bool
     */
    public function getIsOnStock()
    {
        if (is_null($this->isOnStock)) {
            /** @psalm-var ?bool $data */
            $data = $this->raw(ProductVariantChannelAvailability::FIELD_IS_ON_STOCK);
            if (is_null($data)) {
                return null;
            }
            $this->isOnStock = (bool) $data;
        }

        return $this->isOnStock;
    }

    public function setAvailableQuantity(?int $availableQuantity): void
    {
        $this->availableQuantity = $availableQuantity;
    }

    public function setRestockableInDays(?int $restockableInDays): void
    {
        $this->restockableInDays = $restockableInDays;
    }

    public function setIsOnStock(?bool $isOnStock): void
    {
        $this->isOnStock = $isOnStock;
    }
}
