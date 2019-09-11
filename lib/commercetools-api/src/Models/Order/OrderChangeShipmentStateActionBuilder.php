<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Order;

use Commercetools\Base\Builder;

/**
 * @implements Builder<OrderChangeShipmentStateAction>
 */
final class OrderChangeShipmentStateActionBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $action;

    /**
     * @var ?string
     */
    private $shipmentState;

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
    public function getShipmentState()
    {
        return $this->shipmentState;
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
    public function withShipmentState(?string $shipmentState)
    {
        $this->shipmentState = $shipmentState;

        return $this;
    }

    public function build(): OrderChangeShipmentStateAction
    {
        return new OrderChangeShipmentStateActionModel(
            $this->action,
            $this->shipmentState
        );
    }

    public static function of(): OrderChangeShipmentStateActionBuilder
    {
        return new self();
    }
}