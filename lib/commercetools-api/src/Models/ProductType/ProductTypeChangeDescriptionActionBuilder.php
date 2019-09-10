<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductType;

use Commercetools\Base\Builder;

/**
 * @implements Builder<ProductTypeChangeDescriptionAction>
 */
final class ProductTypeChangeDescriptionActionBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $action;

    /**
     * @var ?string
     */
    private $description;

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
    public function getDescription()
    {
        return $this->description;
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
    public function withDescription(?string $description)
    {
        $this->description = $description;

        return $this;
    }

    public function build(): ProductTypeChangeDescriptionAction
    {
        return new ProductTypeChangeDescriptionActionModel(
            $this->action,
            $this->description
        );
    }

    public static function of(): ProductTypeChangeDescriptionActionBuilder
    {
        return new self();
    }
}
