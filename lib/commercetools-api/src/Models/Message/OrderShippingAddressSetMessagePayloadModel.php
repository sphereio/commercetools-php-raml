<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Common\Address;
use Commercetools\Api\Models\Common\AddressModel;
use Commercetools\Base\JsonObjectModel;
use stdClass;

final class OrderShippingAddressSetMessagePayloadModel extends JsonObjectModel implements OrderShippingAddressSetMessagePayload
{
    const DISCRIMINATOR_VALUE = 'OrderShippingAddressSet';

    /**
     * @var ?string
     */
    protected $type;

    /**
     * @var ?Address
     */
    protected $oldAddress;

    /**
     * @var ?Address
     */
    protected $address;

    public function __construct(
        string $type = null,
        Address $oldAddress = null,
        Address $address = null
    ) {
        $this->type = $type;
        $this->oldAddress = $oldAddress;
        $this->address = $address;
    }

    /**
     * @return null|string
     */
    public function getType()
    {
        if (is_null($this->type)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(MessagePayload::FIELD_TYPE);
            if (is_null($data)) {
                return null;
            }
            $this->type = (string) $data;
        }

        return $this->type;
    }

    /**
     * @return null|Address
     */
    public function getOldAddress()
    {
        if (is_null($this->oldAddress)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(OrderShippingAddressSetMessagePayload::FIELD_OLD_ADDRESS);
            if (is_null($data)) {
                return null;
            }

            $this->oldAddress = AddressModel::of($data);
        }

        return $this->oldAddress;
    }

    /**
     * @return null|Address
     */
    public function getAddress()
    {
        if (is_null($this->address)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(OrderShippingAddressSetMessagePayload::FIELD_ADDRESS);
            if (is_null($data)) {
                return null;
            }

            $this->address = AddressModel::of($data);
        }

        return $this->address;
    }

    public function setType(?string $type): void
    {
        $this->type = $type;
    }

    public function setOldAddress(?Address $oldAddress): void
    {
        $this->oldAddress = $oldAddress;
    }

    public function setAddress(?Address $address): void
    {
        $this->address = $address;
    }
}
