<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Api\Models\Order\StagedOrderUpdateAction;
use Commercetools\Base\JsonObjectModel;

final class StagedOrderSetReturnPaymentStateActionModel extends JsonObjectModel implements StagedOrderSetReturnPaymentStateAction
{
    const DISCRIMINATOR_VALUE = 'setReturnPaymentState';

    /**
     * @var ?string
     */
    protected $action;

    /**
     * @var ?string
     */
    protected $returnItemId;

    /**
     * @var ?string
     */
    protected $paymentState;

    public function __construct(
        string $action = null,
        string $returnItemId = null,
        string $paymentState = null
    ) {
        $this->action = $action;
        $this->returnItemId = $returnItemId;
        $this->paymentState = $paymentState;
    }

    /**
     * @return null|string
     */
    public function getAction()
    {
        if (is_null($this->action)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(StagedOrderUpdateAction::FIELD_ACTION);
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
    public function getReturnItemId()
    {
        if (is_null($this->returnItemId)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(StagedOrderSetReturnPaymentStateAction::FIELD_RETURN_ITEM_ID);
            if (is_null($data)) {
                return null;
            }
            $this->returnItemId = (string) $data;
        }

        return $this->returnItemId;
    }

    /**
     * @return null|string
     */
    public function getPaymentState()
    {
        if (is_null($this->paymentState)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(StagedOrderSetReturnPaymentStateAction::FIELD_PAYMENT_STATE);
            if (is_null($data)) {
                return null;
            }
            $this->paymentState = (string) $data;
        }

        return $this->paymentState;
    }

    public function setAction(?string $action): void
    {
        $this->action = $action;
    }

    public function setReturnItemId(?string $returnItemId): void
    {
        $this->returnItemId = $returnItemId;
    }

    public function setPaymentState(?string $paymentState): void
    {
        $this->paymentState = $paymentState;
    }
}
