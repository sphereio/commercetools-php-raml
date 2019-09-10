<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Customer;

use Commercetools\Base\Builder;

/**
 * @implements Builder<CustomerReference>
 */
final class CustomerReferenceBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $typeId;

    /**
     * @var ?string
     */
    private $id;

    /**
     * @var Customer|?CustomerBuilder
     */
    private $obj;

    public function __construct()
    {
    }

    /**
     * @return null|string
     */
    public function getTypeId()
    {
        return $this->typeId;
    }

    /**
     * @return null|string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return null|Customer
     */
    public function getObj()
    {
        return $this->obj instanceof CustomerBuilder ? $this->obj->build() : $this->obj;
    }

    /**
     * @return $this
     */
    public function withTypeId(?string $typeId)
    {
        $this->typeId = $typeId;

        return $this;
    }

    /**
     * @return $this
     */
    public function withId(?string $id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return $this
     */
    public function withObj(?Customer $obj)
    {
        $this->obj = $obj;

        return $this;
    }

    /**
     * @return $this
     */
    public function withObjBuilder(?CustomerBuilder $obj)
    {
        $this->obj = $obj;

        return $this;
    }

    public function build(): CustomerReference
    {
        return new CustomerReferenceModel(
            $this->typeId,
            $this->id,
            ($this->obj instanceof CustomerBuilder ? $this->obj->build() : $this->obj)
        );
    }

    public static function of(): CustomerReferenceBuilder
    {
        return new self();
    }
}
