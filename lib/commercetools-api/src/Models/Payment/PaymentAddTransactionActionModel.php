<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Payment;

use Commercetools\Base\JsonObjectModel;
use stdClass;

final class PaymentAddTransactionActionModel extends JsonObjectModel implements PaymentAddTransactionAction
{
    const DISCRIMINATOR_VALUE = 'addTransaction';

    /**
     * @var ?string
     */
    protected $action;

    /**
     * @var ?TransactionDraft
     */
    protected $transaction;

    public function __construct(
        string $action = null,
        TransactionDraft $transaction = null
    ) {
        $this->action = $action;
        $this->transaction = $transaction;
    }

    /**
     * @return null|string
     */
    public function getAction()
    {
        if (is_null($this->action)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(PaymentUpdateAction::FIELD_ACTION);
            if (is_null($data)) {
                return null;
            }
            $this->action = (string) $data;
        }

        return $this->action;
    }

    /**
     * @return null|TransactionDraft
     */
    public function getTransaction()
    {
        if (is_null($this->transaction)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(PaymentAddTransactionAction::FIELD_TRANSACTION);
            if (is_null($data)) {
                return null;
            }

            $this->transaction = TransactionDraftModel::of($data);
        }

        return $this->transaction;
    }

    public function setAction(?string $action): void
    {
        $this->action = $action;
    }

    public function setTransaction(?TransactionDraft $transaction): void
    {
        $this->transaction = $transaction;
    }
}