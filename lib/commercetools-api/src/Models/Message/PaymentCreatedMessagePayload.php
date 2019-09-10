<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Payment\Payment;

interface PaymentCreatedMessagePayload extends MessagePayload
{
    const FIELD_PAYMENT = 'payment';

    /**
     * @return null|Payment
     */
    public function getPayment();

    public function setPayment(?Payment $payment): void;
}
