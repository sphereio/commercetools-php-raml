<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Api\Models\Common\Address;
use Commercetools\Api\Models\Common\AddressModel;
use Commercetools\Base\JsonObjectModel;
use stdClass;

final class CartAddItemShippingAddressActionModel extends JsonObjectModel implements CartAddItemShippingAddressAction
{
    const DISCRIMINATOR_VALUE = 'addItemShippingAddress';

    /**
     * @var ?string
     */
    protected $action;

    /**
     * @var ?Address
     */
    protected $address;

    public function __construct(
        string $action = null,
        Address $address = null
    ) {
        $this->action = $action;
        $this->address = $address;
    }

    /**
     * @return null|string
     */
    public function getAction()
    {
        if (is_null($this->action)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(CartUpdateAction::FIELD_ACTION);
            if (is_null($data)) {
                return null;
            }
            $this->action = (string) $data;
        }

        return $this->action;
    }

    /**
     * @return null|Address
     */
    public function getAddress()
    {
        if (is_null($this->address)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(CartAddItemShippingAddressAction::FIELD_ADDRESS);
            if (is_null($data)) {
                return null;
            }

            $this->address = AddressModel::of($data);
        }

        return $this->address;
    }

    public function setAction(?string $action): void
    {
        $this->action = $action;
    }

    public function setAddress(?Address $address): void
    {
        $this->address = $address;
    }
}
