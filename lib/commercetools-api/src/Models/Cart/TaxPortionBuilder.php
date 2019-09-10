<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Api\Models\Common\Money;
use Commercetools\Api\Models\Common\MoneyBuilder;
use Commercetools\Base\Builder;

/**
 * @implements Builder<TaxPortion>
 */
final class TaxPortionBuilder implements Builder
{
    /**
     * @var Money|?MoneyBuilder
     */
    private $amount;

    /**
     * @var ?int
     */
    private $rate;

    /**
     * @var ?string
     */
    private $name;

    public function __construct()
    {
    }

    /**
     * @return null|Money
     */
    public function getAmount()
    {
        return $this->amount instanceof MoneyBuilder ? $this->amount->build() : $this->amount;
    }

    /**
     * @return null|int
     */
    public function getRate()
    {
        return $this->rate;
    }

    /**
     * @return null|string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return $this
     */
    public function withAmount(?Money $amount)
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * @return $this
     */
    public function withRate(?int $rate)
    {
        $this->rate = $rate;

        return $this;
    }

    /**
     * @return $this
     */
    public function withName(?string $name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return $this
     */
    public function withAmountBuilder(?MoneyBuilder $amount)
    {
        $this->amount = $amount;

        return $this;
    }

    public function build(): TaxPortion
    {
        return new TaxPortionModel(
            ($this->amount instanceof MoneyBuilder ? $this->amount->build() : $this->amount),
            $this->rate,
            $this->name
        );
    }

    public static function of(): TaxPortionBuilder
    {
        return new self();
    }
}
