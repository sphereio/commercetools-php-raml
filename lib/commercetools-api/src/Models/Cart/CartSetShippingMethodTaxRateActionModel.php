<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Base\JsonObjectModel;
use stdClass;

final class CartSetShippingMethodTaxRateActionModel extends JsonObjectModel implements CartSetShippingMethodTaxRateAction
{
    const DISCRIMINATOR_VALUE = 'setShippingMethodTaxRate';

    /**
     * @var ?string
     */
    protected $action;

    /**
     * @var ?ExternalTaxRateDraft
     */
    protected $externalTaxRate;

    public function __construct(
        string $action = null,
        ExternalTaxRateDraft $externalTaxRate = null
    ) {
        $this->action = $action;
        $this->externalTaxRate = $externalTaxRate;
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
     * @return null|ExternalTaxRateDraft
     */
    public function getExternalTaxRate()
    {
        if (is_null($this->externalTaxRate)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(CartSetShippingMethodTaxRateAction::FIELD_EXTERNAL_TAX_RATE);
            if (is_null($data)) {
                return null;
            }

            $this->externalTaxRate = ExternalTaxRateDraftModel::of($data);
        }

        return $this->externalTaxRate;
    }

    public function setAction(?string $action): void
    {
        $this->action = $action;
    }

    public function setExternalTaxRate(?ExternalTaxRateDraft $externalTaxRate): void
    {
        $this->externalTaxRate = $externalTaxRate;
    }
}