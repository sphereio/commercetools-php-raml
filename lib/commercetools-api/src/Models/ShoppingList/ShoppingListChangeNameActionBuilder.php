<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ShoppingList;

use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Api\Models\Common\LocalizedStringBuilder;
use Commercetools\Base\Builder;

/**
 * @implements Builder<ShoppingListChangeNameAction>
 */
final class ShoppingListChangeNameActionBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $action;

    /**
     * @var LocalizedString|?LocalizedStringBuilder
     */
    private $name;

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
     * @return null|LocalizedString
     */
    public function getName()
    {
        return $this->name instanceof LocalizedStringBuilder ? $this->name->build() : $this->name;
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
    public function withName(?LocalizedString $name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return $this
     */
    public function withNameBuilder(?LocalizedStringBuilder $name)
    {
        $this->name = $name;

        return $this;
    }

    public function build(): ShoppingListChangeNameAction
    {
        return new ShoppingListChangeNameActionModel(
            $this->action,
            ($this->name instanceof LocalizedStringBuilder ? $this->name->build() : $this->name)
        );
    }

    public static function of(): ShoppingListChangeNameActionBuilder
    {
        return new self();
    }
}
