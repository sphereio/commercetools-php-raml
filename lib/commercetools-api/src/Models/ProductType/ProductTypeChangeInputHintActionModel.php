<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductType;

use Commercetools\Base\JsonObjectModel;

final class ProductTypeChangeInputHintActionModel extends JsonObjectModel implements ProductTypeChangeInputHintAction
{
    const DISCRIMINATOR_VALUE = 'changeInputHint';

    /**
     * @var ?string
     */
    protected $action;

    /**
     * @var ?string
     */
    protected $newValue;

    /**
     * @var ?string
     */
    protected $attributeName;

    public function __construct(
        string $action = null,
        string $newValue = null,
        string $attributeName = null
    ) {
        $this->action = $action;
        $this->newValue = $newValue;
        $this->attributeName = $attributeName;
    }

    /**
     * @return null|string
     */
    public function getAction()
    {
        if (is_null($this->action)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(ProductTypeUpdateAction::FIELD_ACTION);
            if (is_null($data)) {
                return null;
            }
            $this->action = (string) $data;
        }

        return $this->action;
    }

    /**
     * @return null|string
     */
    public function getNewValue()
    {
        if (is_null($this->newValue)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(ProductTypeChangeInputHintAction::FIELD_NEW_VALUE);
            if (is_null($data)) {
                return null;
            }
            $this->newValue = (string) $data;
        }

        return $this->newValue;
    }

    /**
     * @return null|string
     */
    public function getAttributeName()
    {
        if (is_null($this->attributeName)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(ProductTypeChangeInputHintAction::FIELD_ATTRIBUTE_NAME);
            if (is_null($data)) {
                return null;
            }
            $this->attributeName = (string) $data;
        }

        return $this->attributeName;
    }

    public function setAction(?string $action): void
    {
        $this->action = $action;
    }

    public function setNewValue(?string $newValue): void
    {
        $this->newValue = $newValue;
    }

    public function setAttributeName(?string $attributeName): void
    {
        $this->attributeName = $attributeName;
    }
}
