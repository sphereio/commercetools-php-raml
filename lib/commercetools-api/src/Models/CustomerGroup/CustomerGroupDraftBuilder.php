<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\CustomerGroup;

use Commercetools\Api\Models\Type\CustomFields;
use Commercetools\Api\Models\Type\CustomFieldsBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<CustomerGroupDraft>
 */
final class CustomerGroupDraftBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $key;

    /**
     * @var ?string
     */
    private $groupName;

    /**
     * @var null|CustomFields|CustomFieldsBuilder
     */
    private $custom;

    /**
     * <p>User-specific unique identifier for the customer group.</p>
     *
     * @return null|string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * @return null|string
     */
    public function getGroupName()
    {
        return $this->groupName;
    }

    /**
     * @return null|CustomFields
     */
    public function getCustom()
    {
        return $this->custom instanceof CustomFieldsBuilder ? $this->custom->build() : $this->custom;
    }

    /**
     * @param ?string $key
     * @return $this
     */
    public function withKey(?string $key)
    {
        $this->key = $key;

        return $this;
    }

    /**
     * @param ?string $groupName
     * @return $this
     */
    public function withGroupName(?string $groupName)
    {
        $this->groupName = $groupName;

        return $this;
    }

    /**
     * @param ?CustomFields $custom
     * @return $this
     */
    public function withCustom(?CustomFields $custom)
    {
        $this->custom = $custom;

        return $this;
    }

    /**
     * @deprecated use withCustom() instead
     * @return $this
     */
    public function withCustomBuilder(?CustomFieldsBuilder $custom)
    {
        $this->custom = $custom;

        return $this;
    }

    public function build(): CustomerGroupDraft
    {
        return new CustomerGroupDraftModel(
            $this->key,
            $this->groupName,
            $this->custom instanceof CustomFieldsBuilder ? $this->custom->build() : $this->custom
        );
    }

    public static function of(): CustomerGroupDraftBuilder
    {
        return new self();
    }
}
