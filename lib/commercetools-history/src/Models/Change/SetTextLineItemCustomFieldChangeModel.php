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
use Commercetools\History\Models\ChangeValue\TextLineItemValue;
use Commercetools\History\Models\ChangeValue\TextLineItemValueModel;

/**
 * @internal
 */
final class SetTextLineItemCustomFieldChangeModel extends JsonObjectModel implements SetTextLineItemCustomFieldChange
{

    public const DISCRIMINATOR_VALUE = 'SetTextLineItemCustomFieldChange';
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
    protected $name;

    /**
     * @var ?string
     */
    protected $customTypeId;

    /**
     * @var ?TextLineItemValue
     */
    protected $textLineItem;

    /**
     * @var ?mixed
     */
    protected $nextValue;

    /**
     * @var ?mixed
     */
    protected $previousValue;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $change = null,
        ?string $name = null,
        ?string $customTypeId = null,
        ?TextLineItemValue $textLineItem = null,
         $nextValue = null,
         $previousValue = null
    ) {
        $this->change = $change;
        $this->name = $name;
        $this->customTypeId = $customTypeId;
        $this->textLineItem = $textLineItem;
        $this->nextValue = $nextValue;
        $this->previousValue = $previousValue;
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
     * <p>Update action for <code>setTextLineItemCustomField</code></p>
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
    public function getName()
    {
        if (is_null($this->name)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_NAME);
            if (is_null($data)) {
                return null;
            }
            $this->name =  (string) $data;
        }

        return $this->name;
    }

    /**
     * @return null|string
     */
    public function getCustomTypeId()
    {
        if (is_null($this->customTypeId)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_CUSTOM_TYPE_ID);
            if (is_null($data)) {
                return null;
            }
            $this->customTypeId =  (string) $data;
        }

        return $this->customTypeId;
    }

    /**
     * @return null|TextLineItemValue
     */
    public function getTextLineItem()
    {
        if (is_null($this->textLineItem)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_TEXT_LINE_ITEM);
            if (is_null($data)) {
                return null;
            }

            $this->textLineItem =  TextLineItemValueModel::of($data);
        }

        return $this->textLineItem;
    }

    /**
     * @return null|mixed
     */
    public function getNextValue()
    {
        if (is_null($this->nextValue)) {
            /** @psalm-var mixed $data */
            $data = $this->raw(self::FIELD_NEXT_VALUE);
            if (is_null($data)) {
                return null;
            }
            $this->nextValue =  $data;
        }

        return $this->nextValue;
    }

    /**
     * @return null|mixed
     */
    public function getPreviousValue()
    {
        if (is_null($this->previousValue)) {
            /** @psalm-var mixed $data */
            $data = $this->raw(self::FIELD_PREVIOUS_VALUE);
            if (is_null($data)) {
                return null;
            }
            $this->previousValue =  $data;
        }

        return $this->previousValue;
    }


    /**
     * @param ?string $change
     */
    public function setChange(?string $change): void
    {
        $this->change = $change;
    }

    /**
     * @param ?string $name
     */
    public function setName(?string $name): void
    {
        $this->name = $name;
    }

    /**
     * @param ?string $customTypeId
     */
    public function setCustomTypeId(?string $customTypeId): void
    {
        $this->customTypeId = $customTypeId;
    }

    /**
     * @param ?TextLineItemValue $textLineItem
     */
    public function setTextLineItem(?TextLineItemValue $textLineItem): void
    {
        $this->textLineItem = $textLineItem;
    }

    /**
     * @param mixed $nextValue
     */
    public function setNextValue( $nextValue): void
    {
        $this->nextValue = $nextValue;
    }

    /**
     * @param mixed $previousValue
     */
    public function setPreviousValue( $previousValue): void
    {
        $this->previousValue = $previousValue;
    }



}
