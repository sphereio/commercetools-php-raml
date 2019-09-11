<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Base\Builder;

/**
 * @implements Builder<DiscountedLineItemPriceForQuantity>
 */
final class DiscountedLineItemPriceForQuantityBuilder implements Builder
{
    /**
     * @var ?int
     */
    private $quantity;

    /**
     * @var DiscountedLineItemPrice|?DiscountedLineItemPriceBuilder
     */
    private $discountedPrice;

    public function __construct()
    {
    }

    /**
     * @return null|int
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @return null|DiscountedLineItemPrice
     */
    public function getDiscountedPrice()
    {
        return $this->discountedPrice instanceof DiscountedLineItemPriceBuilder ? $this->discountedPrice->build() : $this->discountedPrice;
    }

    /**
     * @return $this
     */
    public function withQuantity(?int $quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * @return $this
     */
    public function withDiscountedPrice(?DiscountedLineItemPrice $discountedPrice)
    {
        $this->discountedPrice = $discountedPrice;

        return $this;
    }

    /**
     * @return $this
     */
    public function withDiscountedPriceBuilder(?DiscountedLineItemPriceBuilder $discountedPrice)
    {
        $this->discountedPrice = $discountedPrice;

        return $this;
    }

    public function build(): DiscountedLineItemPriceForQuantity
    {
        return new DiscountedLineItemPriceForQuantityModel(
            $this->quantity,
            ($this->discountedPrice instanceof DiscountedLineItemPriceBuilder ? $this->discountedPrice->build() : $this->discountedPrice)
        );
    }

    public static function of(): DiscountedLineItemPriceForQuantityBuilder
    {
        return new self();
    }
}