<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Change;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;
use Commercetools\History\Models\Common\PriceCollection;

/**
 * @internal
 */
final class SetPricesChangeModel extends JsonObjectModel implements SetPricesChange
{

    public const DISCRIMINATOR_VALUE = 'SetPricesChange';
    /**
     * @var ?string
     */
    protected $type;

    /**
     * @var ?string
     */
    protected $change;

    /**
     * @var ?string
     */
    protected $catalogData;

    /**
     * @var ?string
     */
    protected $variant;

    /**
     * @var ?PriceCollection
     */
    protected $previousValue;

    /**
     * @var ?PriceCollection
     */
    protected $nextValue;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $change = null,
        ?string $catalogData = null,
        ?string $variant = null,
        ?PriceCollection $previousValue = null,
        ?PriceCollection $nextValue = null
    ) {
        $this->change = $change;
        $this->catalogData = $catalogData;
        $this->variant = $variant;
        $this->previousValue = $previousValue;
        $this->nextValue = $nextValue;
        $this->type = static::DISCRIMINATOR_VALUE;
    }

    /**
     * @return null|string
     */
    public function getType()
    {
        if (is_null($this->type)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_TYPE);
            if (is_null($data)) {
                return null;
            }
            $this->type =  (string) $data;
        }

        return $this->type;
    }

    /**
     * <p>Update action for <code>setPrices</code></p>
     *
     * @return null|string
     */
    public function getChange()
    {
        if (is_null($this->change)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_CHANGE);
            if (is_null($data)) {
                return null;
            }
            $this->change =  (string) $data;
        }

        return $this->change;
    }

    /**
     * @return null|string
     */
    public function getCatalogData()
    {
        if (is_null($this->catalogData)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_CATALOG_DATA);
            if (is_null($data)) {
                return null;
            }
            $this->catalogData =  (string) $data;
        }

        return $this->catalogData;
    }

    /**
     * @return null|string
     */
    public function getVariant()
    {
        if (is_null($this->variant)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_VARIANT);
            if (is_null($data)) {
                return null;
            }
            $this->variant =  (string) $data;
        }

        return $this->variant;
    }

    /**
     * @return null|PriceCollection
     */
    public function getPreviousValue()
    {
        if (is_null($this->previousValue)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_PREVIOUS_VALUE);
            if (is_null($data)) {
                return null;
            }
            $this->previousValue =  PriceCollection::fromArray($data);
        }

        return $this->previousValue;
    }

    /**
     * @return null|PriceCollection
     */
    public function getNextValue()
    {
        if (is_null($this->nextValue)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_NEXT_VALUE);
            if (is_null($data)) {
                return null;
            }
            $this->nextValue =  PriceCollection::fromArray($data);
        }

        return $this->nextValue;
    }


    /**
     * @param ?string $change
     */
    public function setChange(?string $change): void
    {
        $this->change = $change;
    }

    /**
     * @param ?string $catalogData
     */
    public function setCatalogData(?string $catalogData): void
    {
        $this->catalogData = $catalogData;
    }

    /**
     * @param ?string $variant
     */
    public function setVariant(?string $variant): void
    {
        $this->variant = $variant;
    }

    /**
     * @param ?PriceCollection $previousValue
     */
    public function setPreviousValue(?PriceCollection $previousValue): void
    {
        $this->previousValue = $previousValue;
    }

    /**
     * @param ?PriceCollection $nextValue
     */
    public function setNextValue(?PriceCollection $nextValue): void
    {
        $this->nextValue = $nextValue;
    }



}
