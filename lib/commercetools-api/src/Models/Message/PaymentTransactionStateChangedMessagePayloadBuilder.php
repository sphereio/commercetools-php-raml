<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<PaymentTransactionStateChangedMessagePayload>
 */
final class PaymentTransactionStateChangedMessagePayloadBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $transactionId;

    /**
     * @var ?string
     */
    private $state;

    /**
     * @return null|string
     */
    public function getTransactionId()
    {
        return $this->transactionId;
    }

    /**
     * @return null|string
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @param ?string $transactionId
     * @return $this
     */
    public function withTransactionId(?string $transactionId)
    {
        $this->transactionId = $transactionId;

        return $this;
    }

    /**
     * @param ?string $state
     * @return $this
     */
    public function withState(?string $state)
    {
        $this->state = $state;

        return $this;
    }


    public function build(): PaymentTransactionStateChangedMessagePayload
    {
        return new PaymentTransactionStateChangedMessagePayloadModel(
            $this->transactionId,
            $this->state
        );
    }

    public static function of(): PaymentTransactionStateChangedMessagePayloadBuilder
    {
        return new self();
    }
}
