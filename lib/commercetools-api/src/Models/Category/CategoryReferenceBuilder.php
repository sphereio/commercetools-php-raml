<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Category;

use Commercetools\Base\Builder;

/**
 * @implements Builder<CategoryReference>
 */
final class CategoryReferenceBuilder implements Builder
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
     * @var Category|?CategoryBuilder
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
     * @return null|Category
     */
    public function getObj()
    {
        return $this->obj instanceof CategoryBuilder ? $this->obj->build() : $this->obj;
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
    public function withObj(?Category $obj)
    {
        $this->obj = $obj;

        return $this;
    }

    /**
     * @return $this
     */
    public function withObjBuilder(?CategoryBuilder $obj)
    {
        $this->obj = $obj;

        return $this;
    }

    public function build(): CategoryReference
    {
        return new CategoryReferenceModel(
            $this->typeId,
            $this->id,
            ($this->obj instanceof CategoryBuilder ? $this->obj->build() : $this->obj)
        );
    }

    public static function of(): CategoryReferenceBuilder
    {
        return new self();
    }
}
