<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Productvariants;

use Commercetools\Base\JsonObjectModel;

final class LocalizableEnumSetAttributeModel extends JsonObjectModel implements LocalizableEnumSetAttribute
{
    const DISCRIMINATOR_VALUE = 'lenum-set';

    /**
     * @var ?string
     */
    protected $name;

    /**
     * @var ?string
     */
    protected $type;

    /**
     * @var ?array
     */
    protected $value;

    public function __construct(
        string $name = null,
        string $type = null,
        array $value = null
    ) {
        $this->name = $name;
        $this->type = $type;
        $this->value = $value;
    }

    /**
     * <p>The name of this attribute must match a name of the product types attribute definitions.
     * The name is required if this type is used in a product variant and must not be set when
     * used in a product variant patch.</p>.
     *
     * @return null|string
     */
    public function getName()
    {
        if (is_null($this->name)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(Attribute::FIELD_NAME);
            if (is_null($data)) {
                return null;
            }
            $this->name = (string) $data;
        }

        return $this->name;
    }

    /**
     * @return null|string
     */
    public function getType()
    {
        if (is_null($this->type)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(Attribute::FIELD_TYPE);
            if (is_null($data)) {
                return null;
            }
            $this->type = (string) $data;
        }

        return $this->type;
    }

    /**
     * @return null|array
     */
    public function getValue()
    {
        if (is_null($this->value)) {
            /** @psalm-var ?array<int, mixed> $data */
            $data = $this->raw(LocalizableEnumSetAttribute::FIELD_VALUE);
            if (is_null($data)) {
                return null;
            }
            $this->value = $data;
        }

        return $this->value;
    }

    public function setName(?string $name): void
    {
        $this->name = $name;
    }

    public function setType(?string $type): void
    {
        $this->type = $type;
    }

    public function setValue(?array $value): void
    {
        $this->value = $value;
    }
}