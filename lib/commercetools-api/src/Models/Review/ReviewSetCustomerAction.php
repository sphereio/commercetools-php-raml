<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Review;

use Commercetools\Api\Models\Customer\CustomerResourceIdentifier;

interface ReviewSetCustomerAction extends ReviewUpdateAction
{
    const FIELD_CUSTOMER = 'customer';

    /**
     * @return null|CustomerResourceIdentifier
     */
    public function getCustomer();

    public function setCustomer(?CustomerResourceIdentifier $customer): void;
}
