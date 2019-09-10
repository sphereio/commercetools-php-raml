<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Customer;

use Commercetools\Base\JsonObjectModel;
use stdClass;

final class CustomerUpdateActionModel extends JsonObjectModel implements CustomerUpdateAction
{
    const DISCRIMINATOR_VALUE = '';

    /**
     * @var ?string
     */
    protected $action;

    /**
     * @psalm-var array<string, class-string<CustomerUpdateAction> >
     */
    private static $discriminatorClasses = [
        'addAddress' => CustomerAddAddressActionModel::class,
        'addBillingAddressId' => CustomerAddBillingAddressIdActionModel::class,
        'addShippingAddressId' => CustomerAddShippingAddressIdActionModel::class,
        'changeAddress' => CustomerChangeAddressActionModel::class,
        'changeEmail' => CustomerChangeEmailActionModel::class,
        'removeAddress' => CustomerRemoveAddressActionModel::class,
        'removeBillingAddressId' => CustomerRemoveBillingAddressIdActionModel::class,
        'removeShippingAddressId' => CustomerRemoveShippingAddressIdActionModel::class,
        'setCompanyName' => CustomerSetCompanyNameActionModel::class,
        'setCustomField' => CustomerSetCustomFieldActionModel::class,
        'setCustomType' => CustomerSetCustomTypeActionModel::class,
        'setCustomerGroup' => CustomerSetCustomerGroupActionModel::class,
        'setCustomerNumber' => CustomerSetCustomerNumberActionModel::class,
        'setDateOfBirth' => CustomerSetDateOfBirthActionModel::class,
        'setDefaultBillingAddress' => CustomerSetDefaultBillingAddressActionModel::class,
        'setDefaultShippingAddress' => CustomerSetDefaultShippingAddressActionModel::class,
        'setExternalId' => CustomerSetExternalIdActionModel::class,
        'setFirstName' => CustomerSetFirstNameActionModel::class,
        'setKey' => CustomerSetKeyActionModel::class,
        'setLastName' => CustomerSetLastNameActionModel::class,
        'setLocale' => CustomerSetLocaleActionModel::class,
        'setMiddleName' => CustomerSetMiddleNameActionModel::class,
        'setSalutation' => CustomerSetSalutationActionModel::class,
        'setTitle' => CustomerSetTitleActionModel::class,
        'setVatId' => CustomerSetVatIdActionModel::class,
    ];

    public function __construct(
        string $action = null
    ) {
        $this->action = $action;
        $this->action = static::DISCRIMINATOR_VALUE;
    }

    /**
     * @return null|string
     */
    public function getAction()
    {
        if (is_null($this->action)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(CustomerUpdateAction::FIELD_ACTION);
            if (is_null($data)) {
                return null;
            }
            $this->action = (string) $data;
        }

        return $this->action;
    }

    public function setAction(?string $action): void
    {
        $this->action = $action;
    }

    /**
     * @psalm-param stdClass|array<string, mixed> $value
     * @psalm-return class-string<CustomerUpdateAction>
     *
     * @param mixed $value
     */
    public static function resolveDiscriminatorClass($value): string
    {
        $fieldName = CustomerUpdateAction::DISCRIMINATOR_FIELD;
        if (is_object($value) && isset($value->{$fieldName})) {
            /** @var string $discriminatorValue */
            $discriminatorValue = $value->{$fieldName};
            if (isset(static::$discriminatorClasses[$discriminatorValue])) {
                return static::$discriminatorClasses[$discriminatorValue];
            }
        }
        if (is_array($value) && isset($value[$fieldName])) {
            /** @var string $discriminatorValue */
            $discriminatorValue = $value[$fieldName];
            if (isset(static::$discriminatorClasses[$discriminatorValue])) {
                return static::$discriminatorClasses[$discriminatorValue];
            }
        }

        /** @psalm-var class-string<CustomerUpdateAction> */
        $type = CustomerUpdateActionModel::class;

        return $type;
    }
}
