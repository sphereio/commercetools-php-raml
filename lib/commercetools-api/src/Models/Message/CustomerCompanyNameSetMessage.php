<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

interface CustomerCompanyNameSetMessage extends Message
{
    const FIELD_COMPANY_NAME = 'companyName';

    /**
     * @return null|string
     */
    public function getCompanyName();

    public function setCompanyName(?string $companyName): void;
}
