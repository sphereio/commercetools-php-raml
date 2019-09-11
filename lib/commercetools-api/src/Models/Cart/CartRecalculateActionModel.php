<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Base\JsonObjectModel;

final class CartRecalculateActionModel extends JsonObjectModel implements CartRecalculateAction
{
    const DISCRIMINATOR_VALUE = 'recalculate';

    /**
     * @var ?string
     */
    protected $action;

    /**
     * @var ?bool
     */
    protected $updateProductData;

    public function __construct(
        string $action = null,
        bool $updateProductData = null
    ) {
        $this->action = $action;
        $this->updateProductData = $updateProductData;
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
     * @return null|bool
     */
    public function getUpdateProductData()
    {
        if (is_null($this->updateProductData)) {
            /** @psalm-var ?bool $data */
            $data = $this->raw(CartRecalculateAction::FIELD_UPDATE_PRODUCT_DATA);
            if (is_null($data)) {
                return null;
            }
            $this->updateProductData = (bool) $data;
        }

        return $this->updateProductData;
    }

    public function setAction(?string $action): void
    {
        $this->action = $action;
    }

    public function setUpdateProductData(?bool $updateProductData): void
    {
        $this->updateProductData = $updateProductData;
    }
}