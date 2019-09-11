<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Review;

use Commercetools\Base\Builder;

/**
 * @implements Builder<ReviewReference>
 */
final class ReviewReferenceBuilder implements Builder
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
     * @var Review|?ReviewBuilder
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
     * @return null|Review
     */
    public function getObj()
    {
        return $this->obj instanceof ReviewBuilder ? $this->obj->build() : $this->obj;
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
    public function withObj(?Review $obj)
    {
        $this->obj = $obj;

        return $this;
    }

    /**
     * @return $this
     */
    public function withObjBuilder(?ReviewBuilder $obj)
    {
        $this->obj = $obj;

        return $this;
    }

    public function build(): ReviewReference
    {
        return new ReviewReferenceModel(
            $this->typeId,
            $this->id,
            ($this->obj instanceof ReviewBuilder ? $this->obj->build() : $this->obj)
        );
    }

    public static function of(): ReviewReferenceBuilder
    {
        return new self();
    }
}