<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Payment;

interface PaymentSetAnonymousIdAction extends PaymentUpdateAction
{
    const FIELD_ANONYMOUS_ID = 'anonymousId';

    /**
     * @return null|string
     */
    public function getAnonymousId();

    public function setAnonymousId(?string $anonymousId): void;
}
