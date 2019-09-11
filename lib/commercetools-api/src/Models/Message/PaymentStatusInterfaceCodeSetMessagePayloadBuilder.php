<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Base\Builder;

/**
 * @implements Builder<PaymentStatusInterfaceCodeSetMessagePayload>
 */
final class PaymentStatusInterfaceCodeSetMessagePayloadBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $type;

    /**
     * @var ?string
     */
    private $paymentId;

    /**
     * @var ?string
     */
    private $interfaceCode;

    public function __construct()
    {
    }

    /**
     * @return null|string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @return null|string
     */
    public function getPaymentId()
    {
        return $this->paymentId;
    }

    /**
     * @return null|string
     */
    public function getInterfaceCode()
    {
        return $this->interfaceCode;
    }

    /**
     * @return $this
     */
    public function withType(?string $type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @return $this
     */
    public function withPaymentId(?string $paymentId)
    {
        $this->paymentId = $paymentId;

        return $this;
    }

    /**
     * @return $this
     */
    public function withInterfaceCode(?string $interfaceCode)
    {
        $this->interfaceCode = $interfaceCode;

        return $this;
    }

    public function build(): PaymentStatusInterfaceCodeSetMessagePayload
    {
        return new PaymentStatusInterfaceCodeSetMessagePayloadModel(
            $this->type,
            $this->paymentId,
            $this->interfaceCode
        );
    }

    public static function of(): PaymentStatusInterfaceCodeSetMessagePayloadBuilder
    {
        return new self();
    }
}