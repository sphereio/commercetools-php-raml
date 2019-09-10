<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductType;

use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Api\Models\Common\LocalizedStringModel;
use Commercetools\Base\JsonObjectModel;
use stdClass;

final class ProductTypeSetInputTipActionModel extends JsonObjectModel implements ProductTypeSetInputTipAction
{
    const DISCRIMINATOR_VALUE = 'setInputTip';

    /**
     * @var ?string
     */
    protected $action;

    /**
     * @var ?string
     */
    protected $attributeName;

    /**
     * @var ?LocalizedString
     */
    protected $inputTip;

    public function __construct(
        string $action = null,
        string $attributeName = null,
        LocalizedString $inputTip = null
    ) {
        $this->action = $action;
        $this->attributeName = $attributeName;
        $this->inputTip = $inputTip;
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
    public function getAttributeName()
    {
        if (is_null($this->attributeName)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(ProductTypeSetInputTipAction::FIELD_ATTRIBUTE_NAME);
            if (is_null($data)) {
                return null;
            }
            $this->attributeName = (string) $data;
        }

        return $this->attributeName;
    }

    /**
     * @return null|LocalizedString
     */
    public function getInputTip()
    {
        if (is_null($this->inputTip)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(ProductTypeSetInputTipAction::FIELD_INPUT_TIP);
            if (is_null($data)) {
                return null;
            }

            $this->inputTip = LocalizedStringModel::of($data);
        }

        return $this->inputTip;
    }

    public function setAction(?string $action): void
    {
        $this->action = $action;
    }

    public function setAttributeName(?string $attributeName): void
    {
        $this->attributeName = $attributeName;
    }

    public function setInputTip(?LocalizedString $inputTip): void
    {
        $this->inputTip = $inputTip;
    }
}
