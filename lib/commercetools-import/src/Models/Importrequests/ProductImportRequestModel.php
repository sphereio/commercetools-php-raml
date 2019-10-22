<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Importrequests;

use Commercetools\Base\JsonObjectModel;
use Commercetools\Import\Models\Products\ProductImportCollection;
use stdClass;

final class ProductImportRequestModel extends JsonObjectModel implements ProductImportRequest
{
    const DISCRIMINATOR_VALUE = 'product';

    /**
     * @var ?string
     */
    protected $type;

    /**
     * @var ?ProductImportCollection
     */
    protected $resources;

    public function __construct(
        string $type = null,
        ProductImportCollection $resources = null
    ) {
        $this->type = $type;
        $this->resources = $resources;
    }

    /**
     * <p>The type of the import resource.</p>.
     *
     * @return null|string
     */
    public function getType()
    {
        if (is_null($this->type)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(ImportRequest::FIELD_TYPE);
            if (is_null($data)) {
                return null;
            }
            $this->type = (string) $data;
        }

        return $this->type;
    }

    /**
     * <p>The product import resources of this request.</p>.
     *
     * @return null|ProductImportCollection
     */
    public function getResources()
    {
        if (is_null($this->resources)) {
            /** @psalm-var ?array<int, stdClass> $data */
            $data = $this->raw(ProductImportRequest::FIELD_RESOURCES);
            if (is_null($data)) {
                return null;
            }
            $this->resources = ProductImportCollection::fromArray($data);
        }

        return $this->resources;
    }

    public function setType(?string $type): void
    {
        $this->type = $type;
    }

    public function setResources(?ProductImportCollection $resources): void
    {
        $this->resources = $resources;
    }
}