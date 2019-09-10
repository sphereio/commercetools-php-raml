<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ShippingMethod;

use Commercetools\Base\Builder;

/**
 * @implements Builder<PriceFunction>
 */
final class PriceFunctionBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $function;

    /**
     * @var ?string
     */
    private $currencyCode;

    public function __construct()
    {
    }

    /**
     * @return null|string
     */
    public function getFunction()
    {
        return $this->function;
    }

    /**
     * <p>The currency code compliant to <a href="https://en.wikipedia.org/wiki/ISO_4217">ISO 4217</a>.</p>.
     *
     * @return null|string
     */
    public function getCurrencyCode()
    {
        return $this->currencyCode;
    }

    /**
     * @return $this
     */
    public function withFunction(?string $function)
    {
        $this->function = $function;

        return $this;
    }

    /**
     * @return $this
     */
    public function withCurrencyCode(?string $currencyCode)
    {
        $this->currencyCode = $currencyCode;

        return $this;
    }

    public function build(): PriceFunction
    {
        return new PriceFunctionModel(
            $this->function,
            $this->currencyCode
        );
    }

    public static function of(): PriceFunctionBuilder
    {
        return new self();
    }
}
