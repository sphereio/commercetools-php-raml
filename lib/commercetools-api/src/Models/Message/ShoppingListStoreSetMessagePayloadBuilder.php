<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Store\StoreKeyReference;
use Commercetools\Api\Models\Store\StoreKeyReferenceBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<ShoppingListStoreSetMessagePayload>
 */
final class ShoppingListStoreSetMessagePayloadBuilder implements Builder
{
    /**
     * @var null|StoreKeyReference|StoreKeyReferenceBuilder
     */
    private $store;

    /**
     * @return null|StoreKeyReference
     */
    public function getStore()
    {
        return $this->store instanceof StoreKeyReferenceBuilder ? $this->store->build() : $this->store;
    }

    /**
     * @param ?StoreKeyReference $store
     * @return $this
     */
    public function withStore(?StoreKeyReference $store)
    {
        $this->store = $store;

        return $this;
    }

    /**
     * @return $this
     */
    public function withStoreBuilder(?StoreKeyReferenceBuilder $store)
    {
        $this->store = $store;

        return $this;
    }

    public function build(): ShoppingListStoreSetMessagePayload
    {
        return new ShoppingListStoreSetMessagePayloadModel(
            $this->store instanceof StoreKeyReferenceBuilder ? $this->store->build() : $this->store
        );
    }

    public static function of(): ShoppingListStoreSetMessagePayloadBuilder
    {
        return new self();
    }
}
