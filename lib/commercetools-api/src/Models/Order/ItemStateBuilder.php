<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Order;

use Commercetools\Api\Models\State\StateReference;
use Commercetools\Api\Models\State\StateReferenceBuilder;
use Commercetools\Base\Builder;

/**
 * @implements Builder<ItemState>
 */
final class ItemStateBuilder implements Builder
{
    /**
     * @var ?int
     */
    private $quantity;

    /**
     * @var StateReference|?StateReferenceBuilder
     */
    private $state;

    public function __construct()
    {
    }

    /**
     * @return null|int
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @return null|StateReference
     */
    public function getState()
    {
        return $this->state instanceof StateReferenceBuilder ? $this->state->build() : $this->state;
    }

    /**
     * @return $this
     */
    public function withQuantity(?int $quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * @return $this
     */
    public function withState(?StateReference $state)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * @return $this
     */
    public function withStateBuilder(?StateReferenceBuilder $state)
    {
        $this->state = $state;

        return $this;
    }

    public function build(): ItemState
    {
        return new ItemStateModel(
            $this->quantity,
            ($this->state instanceof StateReferenceBuilder ? $this->state->build() : $this->state)
        );
    }

    public static function of(): ItemStateBuilder
    {
        return new self();
    }
}
