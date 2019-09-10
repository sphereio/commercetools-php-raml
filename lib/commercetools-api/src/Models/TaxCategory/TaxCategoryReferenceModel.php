<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\TaxCategory;

use Commercetools\Api\Models\Common\Reference;
use Commercetools\Base\JsonObjectModel;
use stdClass;

final class TaxCategoryReferenceModel extends JsonObjectModel implements TaxCategoryReference
{
    const DISCRIMINATOR_VALUE = 'tax-category';

    /**
     * @var ?string
     */
    protected $typeId;

    /**
     * @var ?string
     */
    protected $id;

    /**
     * @var ?TaxCategory
     */
    protected $obj;

    public function __construct(
        string $typeId = null,
        string $id = null,
        TaxCategory $obj = null
    ) {
        $this->typeId = $typeId;
        $this->id = $id;
        $this->obj = $obj;
    }

    /**
     * @return null|string
     */
    public function getTypeId()
    {
        if (is_null($this->typeId)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(Reference::FIELD_TYPE_ID);
            if (is_null($data)) {
                return null;
            }
            $this->typeId = (string) $data;
        }

        return $this->typeId;
    }

    /**
     * @return null|string
     */
    public function getId()
    {
        if (is_null($this->id)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(Reference::FIELD_ID);
            if (is_null($data)) {
                return null;
            }
            $this->id = (string) $data;
        }

        return $this->id;
    }

    /**
     * @return null|TaxCategory
     */
    public function getObj()
    {
        if (is_null($this->obj)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(TaxCategoryReference::FIELD_OBJ);
            if (is_null($data)) {
                return null;
            }

            $this->obj = TaxCategoryModel::of($data);
        }

        return $this->obj;
    }

    public function setTypeId(?string $typeId): void
    {
        $this->typeId = $typeId;
    }

    public function setId(?string $id): void
    {
        $this->id = $id;
    }

    public function setObj(?TaxCategory $obj): void
    {
        $this->obj = $obj;
    }
}
