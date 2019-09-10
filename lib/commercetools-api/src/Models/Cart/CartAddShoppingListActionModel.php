<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Api\Models\Channel\ChannelResourceIdentifier;
use Commercetools\Api\Models\Channel\ChannelResourceIdentifierModel;
use Commercetools\Api\Models\ShoppingList\ShoppingListResourceIdentifier;
use Commercetools\Api\Models\ShoppingList\ShoppingListResourceIdentifierModel;
use Commercetools\Base\JsonObjectModel;
use stdClass;

final class CartAddShoppingListActionModel extends JsonObjectModel implements CartAddShoppingListAction
{
    const DISCRIMINATOR_VALUE = 'addShoppingList';

    /**
     * @var ?string
     */
    protected $action;

    /**
     * @var ?ShoppingListResourceIdentifier
     */
    protected $shoppingList;

    /**
     * @var ?ChannelResourceIdentifier
     */
    protected $supplyChannel;

    /**
     * @var ?ChannelResourceIdentifier
     */
    protected $distributionChannel;

    public function __construct(
        string $action = null,
        ShoppingListResourceIdentifier $shoppingList = null,
        ChannelResourceIdentifier $supplyChannel = null,
        ChannelResourceIdentifier $distributionChannel = null
    ) {
        $this->action = $action;
        $this->shoppingList = $shoppingList;
        $this->supplyChannel = $supplyChannel;
        $this->distributionChannel = $distributionChannel;
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
     * @return null|ShoppingListResourceIdentifier
     */
    public function getShoppingList()
    {
        if (is_null($this->shoppingList)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(CartAddShoppingListAction::FIELD_SHOPPING_LIST);
            if (is_null($data)) {
                return null;
            }

            $this->shoppingList = ShoppingListResourceIdentifierModel::of($data);
        }

        return $this->shoppingList;
    }

    /**
     * @return null|ChannelResourceIdentifier
     */
    public function getSupplyChannel()
    {
        if (is_null($this->supplyChannel)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(CartAddShoppingListAction::FIELD_SUPPLY_CHANNEL);
            if (is_null($data)) {
                return null;
            }

            $this->supplyChannel = ChannelResourceIdentifierModel::of($data);
        }

        return $this->supplyChannel;
    }

    /**
     * @return null|ChannelResourceIdentifier
     */
    public function getDistributionChannel()
    {
        if (is_null($this->distributionChannel)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(CartAddShoppingListAction::FIELD_DISTRIBUTION_CHANNEL);
            if (is_null($data)) {
                return null;
            }

            $this->distributionChannel = ChannelResourceIdentifierModel::of($data);
        }

        return $this->distributionChannel;
    }

    public function setAction(?string $action): void
    {
        $this->action = $action;
    }

    public function setShoppingList(?ShoppingListResourceIdentifier $shoppingList): void
    {
        $this->shoppingList = $shoppingList;
    }

    public function setSupplyChannel(?ChannelResourceIdentifier $supplyChannel): void
    {
        $this->supplyChannel = $supplyChannel;
    }

    public function setDistributionChannel(?ChannelResourceIdentifier $distributionChannel): void
    {
        $this->distributionChannel = $distributionChannel;
    }
}
