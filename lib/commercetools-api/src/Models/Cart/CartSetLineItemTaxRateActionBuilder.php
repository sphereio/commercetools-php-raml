<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Base\Builder;

/**
 * @implements Builder<CartSetLineItemTaxRateAction>
 */
final class CartSetLineItemTaxRateActionBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $action;

    /**
     * @var ExternalTaxRateDraft|?ExternalTaxRateDraftBuilder
     */
    private $externalTaxRate;

    /**
     * @var ?string
     */
    private $lineItemId;

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
     * @return null|ExternalTaxRateDraft
     */
    public function getExternalTaxRate()
    {
        return $this->externalTaxRate instanceof ExternalTaxRateDraftBuilder ? $this->externalTaxRate->build() : $this->externalTaxRate;
    }

    /**
     * @return null|string
     */
    public function getLineItemId()
    {
        return $this->lineItemId;
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
    public function withExternalTaxRate(?ExternalTaxRateDraft $externalTaxRate)
    {
        $this->externalTaxRate = $externalTaxRate;

        return $this;
    }

    /**
     * @return $this
     */
    public function withLineItemId(?string $lineItemId)
    {
        $this->lineItemId = $lineItemId;

        return $this;
    }

    /**
     * @return $this
     */
    public function withExternalTaxRateBuilder(?ExternalTaxRateDraftBuilder $externalTaxRate)
    {
        $this->externalTaxRate = $externalTaxRate;

        return $this;
    }

    public function build(): CartSetLineItemTaxRateAction
    {
        return new CartSetLineItemTaxRateActionModel(
            $this->action,
            ($this->externalTaxRate instanceof ExternalTaxRateDraftBuilder ? $this->externalTaxRate->build() : $this->externalTaxRate),
            $this->lineItemId
        );
    }

    public static function of(): CartSetLineItemTaxRateActionBuilder
    {
        return new self();
    }
}