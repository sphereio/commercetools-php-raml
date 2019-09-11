<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Customer;

use Commercetools\Base\Builder;

/**
 * @implements Builder<CustomerAddShippingAddressIdAction>
 */
final class CustomerAddShippingAddressIdActionBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $action;

    /**
     * @var ?string
     */
    private $addressId;

    public function __construct()
    {
    }

    /**
     * @return null|string
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * @return null|string
     */
    public function getAddressId()
    {
        return $this->addressId;
    }

    /**
     * @return $this
     */
    public function withAction(?string $action)
    {
        $this->action = $action;

        return $this;
    }

    /**
     * @return $this
     */
    public function withAddressId(?string $addressId)
    {
        $this->addressId = $addressId;

        return $this;
    }

    public function build(): CustomerAddShippingAddressIdAction
    {
        return new CustomerAddShippingAddressIdActionModel(
            $this->action,
            $this->addressId
        );
    }

    public static function of(): CustomerAddShippingAddressIdActionBuilder
    {
        return new self();
    }
}