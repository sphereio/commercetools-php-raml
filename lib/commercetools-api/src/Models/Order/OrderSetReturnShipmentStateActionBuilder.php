<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Order;

use Commercetools\Base\Builder;

/**
 * @implements Builder<OrderSetReturnShipmentStateAction>
 */
final class OrderSetReturnShipmentStateActionBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $action;

    /**
     * @var ?string
     */
    private $shipmentState;

    /**
     * @var ?string
     */
    private $returnItemId;

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
     * @return null|string
     */
    public function getReturnItemId()
    {
        return $this->returnItemId;
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

    /**
     * @return $this
     */
    public function withReturnItemId(?string $returnItemId)
    {
        $this->returnItemId = $returnItemId;

        return $this;
    }

    public function build(): OrderSetReturnShipmentStateAction
    {
        return new OrderSetReturnShipmentStateActionModel(
            $this->action,
            $this->shipmentState,
            $this->returnItemId
        );
    }

    public static function of(): OrderSetReturnShipmentStateActionBuilder
    {
        return new self();
    }
}
