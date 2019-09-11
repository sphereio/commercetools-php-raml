<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Product;

use Commercetools\Base\JsonObjectModel;

final class ProductRemoveVariantActionModel extends JsonObjectModel implements ProductRemoveVariantAction
{
    const DISCRIMINATOR_VALUE = 'removeVariant';

    /**
     * @var ?string
     */
    protected $action;

    /**
     * @var ?bool
     */
    protected $staged;

    /**
     * @var ?int
     */
    protected $id;

    /**
     * @var ?string
     */
    protected $sku;

    public function __construct(
        string $action = null,
        bool $staged = null,
        int $id = null,
        string $sku = null
    ) {
        $this->action = $action;
        $this->staged = $staged;
        $this->id = $id;
        $this->sku = $sku;
    }

    /**
     * @return null|string
     */
    public function getAction()
    {
        if (is_null($this->action)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(ProductUpdateAction::FIELD_ACTION);
            if (is_null($data)) {
                return null;
            }
            $this->action = (string) $data;
        }

        return $this->action;
    }

    /**
     * @return null|bool
     */
    public function getStaged()
    {
        if (is_null($this->staged)) {
            /** @psalm-var ?bool $data */
            $data = $this->raw(ProductRemoveVariantAction::FIELD_STAGED);
            if (is_null($data)) {
                return null;
            }
            $this->staged = (bool) $data;
        }

        return $this->staged;
    }

    /**
     * @return null|int
     */
    public function getId()
    {
        if (is_null($this->id)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(ProductRemoveVariantAction::FIELD_ID);
            if (is_null($data)) {
                return null;
            }
            $this->id = (int) $data;
        }

        return $this->id;
    }

    /**
     * @return null|string
     */
    public function getSku()
    {
        if (is_null($this->sku)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(ProductRemoveVariantAction::FIELD_SKU);
            if (is_null($data)) {
                return null;
            }
            $this->sku = (string) $data;
        }

        return $this->sku;
    }

    public function setAction(?string $action): void
    {
        $this->action = $action;
    }

    public function setStaged(?bool $staged): void
    {
        $this->staged = $staged;
    }

    public function setId(?int $id): void
    {
        $this->id = $id;
    }

    public function setSku(?string $sku): void
    {
        $this->sku = $sku;
    }
}