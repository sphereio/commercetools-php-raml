<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Me;

interface MyCustomerSetLastNameAction extends MyCustomerUpdateAction
{
    const FIELD_LAST_NAME = 'lastName';

    /**
     * @return null|string
     */
    public function getLastName();

    public function setLastName(?string $lastName): void;
}