<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductType;

use Commercetools\Base\JsonObjectModel;
use stdClass;

final class AttributeNestedTypeModel extends JsonObjectModel implements AttributeNestedType
{
    const DISCRIMINATOR_VALUE = 'nested';

    /**
     * @var ?string
     */
    protected $name;

    /**
     * @var ?ProductTypeReference
     */
    protected $typeReference;

    public function __construct(
        string $name = null,
        ProductTypeReference $typeReference = null
    ) {
        $this->name = $name;
        $this->typeReference = $typeReference;
    }

    /**
     * @return null|string
     */
    public function getName()
    {
        if (is_null($this->name)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(AttributeType::FIELD_NAME);
            if (is_null($data)) {
                return null;
            }
            $this->name = (string) $data;
        }

        return $this->name;
    }

    /**
     * @return null|ProductTypeReference
     */
    public function getTypeReference()
    {
        if (is_null($this->typeReference)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(AttributeNestedType::FIELD_TYPE_REFERENCE);
            if (is_null($data)) {
                return null;
            }

            $this->typeReference = ProductTypeReferenceModel::of($data);
        }

        return $this->typeReference;
    }

    public function setName(?string $name): void
    {
        $this->name = $name;
    }

    public function setTypeReference(?ProductTypeReference $typeReference): void
    {
        $this->typeReference = $typeReference;
    }
}