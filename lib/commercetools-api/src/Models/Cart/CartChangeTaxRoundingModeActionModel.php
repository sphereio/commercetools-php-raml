<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Base\JsonObjectModel;

final class CartChangeTaxRoundingModeActionModel extends JsonObjectModel implements CartChangeTaxRoundingModeAction
{
    const DISCRIMINATOR_VALUE = 'changeTaxRoundingMode';

    /**
     * @var ?string
     */
    protected $action;

    /**
     * @var ?string
     */
    protected $taxRoundingMode;

    public function __construct(
        string $action = null,
        string $taxRoundingMode = null
    ) {
        $this->action = $action;
        $this->taxRoundingMode = $taxRoundingMode;
    }

    /**
     * @return null|string
     */
    public function getAction()
    {
        if (is_null($this->action)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(CartUpdateAction::FIELD_ACTION);
            if (is_null($data)) {
                return null;
            }
            $this->action = (string) $data;
        }

        return $this->action;
    }

    /**
     * @return null|string
     */
    public function getTaxRoundingMode()
    {
        if (is_null($this->taxRoundingMode)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(CartChangeTaxRoundingModeAction::FIELD_TAX_ROUNDING_MODE);
            if (is_null($data)) {
                return null;
            }
            $this->taxRoundingMode = (string) $data;
        }

        return $this->taxRoundingMode;
    }

    public function setAction(?string $action): void
    {
        $this->action = $action;
    }

    public function setTaxRoundingMode(?string $taxRoundingMode): void
    {
        $this->taxRoundingMode = $taxRoundingMode;
    }
}