<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductType;

use Commercetools\Base\JsonObjectModel;

final class ProductTypeRemoveAttributeDefinitionActionModel extends JsonObjectModel implements ProductTypeRemoveAttributeDefinitionAction
{
    const DISCRIMINATOR_VALUE = 'removeAttributeDefinition';

    /**
     * @var ?string
     */
    protected $action;

    /**
     * @var ?string
     */
    protected $name;

    public function __construct(
        string $action = null,
        string $name = null
    ) {
        $this->action = $action;
        $this->name = $name;
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
    public function getName()
    {
        if (is_null($this->name)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(ProductTypeRemoveAttributeDefinitionAction::FIELD_NAME);
            if (is_null($data)) {
                return null;
            }
            $this->name = (string) $data;
        }

        return $this->name;
    }

    public function setAction(?string $action): void
    {
        $this->action = $action;
    }

    public function setName(?string $name): void
    {
        $this->name = $name;
    }
}
