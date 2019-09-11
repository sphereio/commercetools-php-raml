<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Api\Models\Common\Address;
use Commercetools\Api\Models\Common\AddressBuilder;
use Commercetools\Api\Models\Common\AddressCollection;
use Commercetools\Api\Models\CustomerGroup\CustomerGroupResourceIdentifier;
use Commercetools\Api\Models\CustomerGroup\CustomerGroupResourceIdentifierBuilder;
use Commercetools\Api\Models\ShippingMethod\ShippingMethodResourceIdentifier;
use Commercetools\Api\Models\ShippingMethod\ShippingMethodResourceIdentifierBuilder;
use Commercetools\Api\Models\Store\StoreResourceIdentifier;
use Commercetools\Api\Models\Store\StoreResourceIdentifierBuilder;
use Commercetools\Api\Models\Type\CustomFieldsDraft;
use Commercetools\Api\Models\Type\CustomFieldsDraftBuilder;
use Commercetools\Base\Builder;

/**
 * @implements Builder<CartDraft>
 */
final class CartDraftBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $country;

    /**
     * @var ?string
     */
    private $anonymousId;

    /**
     * @var ShippingRateInputDraft|?ShippingRateInputDraftBuilder
     */
    private $shippingRateInput;

    /**
     * @var CustomerGroupResourceIdentifier|?CustomerGroupResourceIdentifierBuilder
     */
    private $customerGroup;

    /**
     * @var ?string
     */
    private $origin;

    /**
     * @var ?int
     */
    private $deleteDaysAfterLastModification;

    /**
     * @var CustomFieldsDraft|?CustomFieldsDraftBuilder
     */
    private $custom;

    /**
     * @var ShippingMethodResourceIdentifier|?ShippingMethodResourceIdentifierBuilder
     */
    private $shippingMethod;

    /**
     * @var ?string
     */
    private $taxCalculationMode;

    /**
     * @var StoreResourceIdentifier|?StoreResourceIdentifierBuilder
     */
    private $store;

    /**
     * @var ?string
     */
    private $locale;

    /**
     * @var ExternalTaxRateDraft|?ExternalTaxRateDraftBuilder
     */
    private $externalTaxRateForShippingMethod;

    /**
     * @var ?string
     */
    private $inventoryMode;

    /**
     * @var ?LineItemDraftCollection
     */
    private $lineItems;

    /**
     * @var ?string
     */
    private $taxRoundingMode;

    /**
     * @var ?CustomLineItemDraftCollection
     */
    private $customLineItems;

    /**
     * @var ?AddressCollection
     */
    private $itemShippingAddresses;

    /**
     * @var ?string
     */
    private $taxMode;

    /**
     * @var ?string
     */
    private $customerEmail;

    /**
     * @var ?string
     */
    private $customerId;

    /**
     * @var Address|?AddressBuilder
     */
    private $shippingAddress;

    /**
     * @var ?string
     */
    private $currency;

    /**
     * @var Address|?AddressBuilder
     */
    private $billingAddress;

    public function __construct()
    {
    }

    /**
     * @return null|string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @return null|string
     */
    public function getAnonymousId()
    {
        return $this->anonymousId;
    }

    /**
     * @return null|ShippingRateInputDraft
     */
    public function getShippingRateInput()
    {
        return $this->shippingRateInput instanceof ShippingRateInputDraftBuilder ? $this->shippingRateInput->build() : $this->shippingRateInput;
    }

    /**
     * @return null|CustomerGroupResourceIdentifier
     */
    public function getCustomerGroup()
    {
        return $this->customerGroup instanceof CustomerGroupResourceIdentifierBuilder ? $this->customerGroup->build() : $this->customerGroup;
    }

    /**
     * @return null|string
     */
    public function getOrigin()
    {
        return $this->origin;
    }

    /**
     * @return null|int
     */
    public function getDeleteDaysAfterLastModification()
    {
        return $this->deleteDaysAfterLastModification;
    }

    /**
     * @return null|CustomFieldsDraft
     */
    public function getCustom()
    {
        return $this->custom instanceof CustomFieldsDraftBuilder ? $this->custom->build() : $this->custom;
    }

    /**
     * @return null|ShippingMethodResourceIdentifier
     */
    public function getShippingMethod()
    {
        return $this->shippingMethod instanceof ShippingMethodResourceIdentifierBuilder ? $this->shippingMethod->build() : $this->shippingMethod;
    }

    /**
     * @return null|string
     */
    public function getTaxCalculationMode()
    {
        return $this->taxCalculationMode;
    }

    /**
     * @return null|StoreResourceIdentifier
     */
    public function getStore()
    {
        return $this->store instanceof StoreResourceIdentifierBuilder ? $this->store->build() : $this->store;
    }

    /**
     * @return null|string
     */
    public function getLocale()
    {
        return $this->locale;
    }

    /**
     * @return null|ExternalTaxRateDraft
     */
    public function getExternalTaxRateForShippingMethod()
    {
        return $this->externalTaxRateForShippingMethod instanceof ExternalTaxRateDraftBuilder ? $this->externalTaxRateForShippingMethod->build() : $this->externalTaxRateForShippingMethod;
    }

    /**
     * @return null|string
     */
    public function getInventoryMode()
    {
        return $this->inventoryMode;
    }

    /**
     * @return null|LineItemDraftCollection
     */
    public function getLineItems()
    {
        return $this->lineItems;
    }

    /**
     * @return null|string
     */
    public function getTaxRoundingMode()
    {
        return $this->taxRoundingMode;
    }

    /**
     * @return null|CustomLineItemDraftCollection
     */
    public function getCustomLineItems()
    {
        return $this->customLineItems;
    }

    /**
     * @return null|AddressCollection
     */
    public function getItemShippingAddresses()
    {
        return $this->itemShippingAddresses;
    }

    /**
     * @return null|string
     */
    public function getTaxMode()
    {
        return $this->taxMode;
    }

    /**
     * @return null|string
     */
    public function getCustomerEmail()
    {
        return $this->customerEmail;
    }

    /**
     * @return null|string
     */
    public function getCustomerId()
    {
        return $this->customerId;
    }

    /**
     * @return null|Address
     */
    public function getShippingAddress()
    {
        return $this->shippingAddress instanceof AddressBuilder ? $this->shippingAddress->build() : $this->shippingAddress;
    }

    /**
     * <p>The currency code compliant to <a href="https://en.wikipedia.org/wiki/ISO_4217">ISO 4217</a>.</p>.
     *
     * @return null|string
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * @return null|Address
     */
    public function getBillingAddress()
    {
        return $this->billingAddress instanceof AddressBuilder ? $this->billingAddress->build() : $this->billingAddress;
    }

    /**
     * @return $this
     */
    public function withCountry(?string $country)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * @return $this
     */
    public function withAnonymousId(?string $anonymousId)
    {
        $this->anonymousId = $anonymousId;

        return $this;
    }

    /**
     * @return $this
     */
    public function withShippingRateInput(?ShippingRateInputDraft $shippingRateInput)
    {
        $this->shippingRateInput = $shippingRateInput;

        return $this;
    }

    /**
     * @return $this
     */
    public function withCustomerGroup(?CustomerGroupResourceIdentifier $customerGroup)
    {
        $this->customerGroup = $customerGroup;

        return $this;
    }

    /**
     * @return $this
     */
    public function withOrigin(?string $origin)
    {
        $this->origin = $origin;

        return $this;
    }

    /**
     * @return $this
     */
    public function withDeleteDaysAfterLastModification(?int $deleteDaysAfterLastModification)
    {
        $this->deleteDaysAfterLastModification = $deleteDaysAfterLastModification;

        return $this;
    }

    /**
     * @return $this
     */
    public function withCustom(?CustomFieldsDraft $custom)
    {
        $this->custom = $custom;

        return $this;
    }

    /**
     * @return $this
     */
    public function withShippingMethod(?ShippingMethodResourceIdentifier $shippingMethod)
    {
        $this->shippingMethod = $shippingMethod;

        return $this;
    }

    /**
     * @return $this
     */
    public function withTaxCalculationMode(?string $taxCalculationMode)
    {
        $this->taxCalculationMode = $taxCalculationMode;

        return $this;
    }

    /**
     * @return $this
     */
    public function withStore(?StoreResourceIdentifier $store)
    {
        $this->store = $store;

        return $this;
    }

    /**
     * @return $this
     */
    public function withLocale(?string $locale)
    {
        $this->locale = $locale;

        return $this;
    }

    /**
     * @return $this
     */
    public function withExternalTaxRateForShippingMethod(?ExternalTaxRateDraft $externalTaxRateForShippingMethod)
    {
        $this->externalTaxRateForShippingMethod = $externalTaxRateForShippingMethod;

        return $this;
    }

    /**
     * @return $this
     */
    public function withInventoryMode(?string $inventoryMode)
    {
        $this->inventoryMode = $inventoryMode;

        return $this;
    }

    /**
     * @return $this
     */
    public function withLineItems(?LineItemDraftCollection $lineItems)
    {
        $this->lineItems = $lineItems;

        return $this;
    }

    /**
     * @return $this
     */
    public function withTaxRoundingMode(?string $taxRoundingMode)
    {
        $this->taxRoundingMode = $taxRoundingMode;

        return $this;
    }

    /**
     * @return $this
     */
    public function withCustomLineItems(?CustomLineItemDraftCollection $customLineItems)
    {
        $this->customLineItems = $customLineItems;

        return $this;
    }

    /**
     * @return $this
     */
    public function withItemShippingAddresses(?AddressCollection $itemShippingAddresses)
    {
        $this->itemShippingAddresses = $itemShippingAddresses;

        return $this;
    }

    /**
     * @return $this
     */
    public function withTaxMode(?string $taxMode)
    {
        $this->taxMode = $taxMode;

        return $this;
    }

    /**
     * @return $this
     */
    public function withCustomerEmail(?string $customerEmail)
    {
        $this->customerEmail = $customerEmail;

        return $this;
    }

    /**
     * @return $this
     */
    public function withCustomerId(?string $customerId)
    {
        $this->customerId = $customerId;

        return $this;
    }

    /**
     * @return $this
     */
    public function withShippingAddress(?Address $shippingAddress)
    {
        $this->shippingAddress = $shippingAddress;

        return $this;
    }

    /**
     * @return $this
     */
    public function withCurrency(?string $currency)
    {
        $this->currency = $currency;

        return $this;
    }

    /**
     * @return $this
     */
    public function withBillingAddress(?Address $billingAddress)
    {
        $this->billingAddress = $billingAddress;

        return $this;
    }

    /**
     * @return $this
     */
    public function withShippingRateInputBuilder(?ShippingRateInputDraftBuilder $shippingRateInput)
    {
        $this->shippingRateInput = $shippingRateInput;

        return $this;
    }

    /**
     * @return $this
     */
    public function withCustomerGroupBuilder(?CustomerGroupResourceIdentifierBuilder $customerGroup)
    {
        $this->customerGroup = $customerGroup;

        return $this;
    }

    /**
     * @return $this
     */
    public function withCustomBuilder(?CustomFieldsDraftBuilder $custom)
    {
        $this->custom = $custom;

        return $this;
    }

    /**
     * @return $this
     */
    public function withShippingMethodBuilder(?ShippingMethodResourceIdentifierBuilder $shippingMethod)
    {
        $this->shippingMethod = $shippingMethod;

        return $this;
    }

    /**
     * @return $this
     */
    public function withStoreBuilder(?StoreResourceIdentifierBuilder $store)
    {
        $this->store = $store;

        return $this;
    }

    /**
     * @return $this
     */
    public function withExternalTaxRateForShippingMethodBuilder(?ExternalTaxRateDraftBuilder $externalTaxRateForShippingMethod)
    {
        $this->externalTaxRateForShippingMethod = $externalTaxRateForShippingMethod;

        return $this;
    }

    /**
     * @return $this
     */
    public function withShippingAddressBuilder(?AddressBuilder $shippingAddress)
    {
        $this->shippingAddress = $shippingAddress;

        return $this;
    }

    /**
     * @return $this
     */
    public function withBillingAddressBuilder(?AddressBuilder $billingAddress)
    {
        $this->billingAddress = $billingAddress;

        return $this;
    }

    public function build(): CartDraft
    {
        return new CartDraftModel(
            $this->country,
            $this->anonymousId,
            ($this->shippingRateInput instanceof ShippingRateInputDraftBuilder ? $this->shippingRateInput->build() : $this->shippingRateInput),
            ($this->customerGroup instanceof CustomerGroupResourceIdentifierBuilder ? $this->customerGroup->build() : $this->customerGroup),
            $this->origin,
            $this->deleteDaysAfterLastModification,
            ($this->custom instanceof CustomFieldsDraftBuilder ? $this->custom->build() : $this->custom),
            ($this->shippingMethod instanceof ShippingMethodResourceIdentifierBuilder ? $this->shippingMethod->build() : $this->shippingMethod),
            $this->taxCalculationMode,
            ($this->store instanceof StoreResourceIdentifierBuilder ? $this->store->build() : $this->store),
            $this->locale,
            ($this->externalTaxRateForShippingMethod instanceof ExternalTaxRateDraftBuilder ? $this->externalTaxRateForShippingMethod->build() : $this->externalTaxRateForShippingMethod),
            $this->inventoryMode,
            $this->lineItems,
            $this->taxRoundingMode,
            $this->customLineItems,
            $this->itemShippingAddresses,
            $this->taxMode,
            $this->customerEmail,
            $this->customerId,
            ($this->shippingAddress instanceof AddressBuilder ? $this->shippingAddress->build() : $this->shippingAddress),
            $this->currency,
            ($this->billingAddress instanceof AddressBuilder ? $this->billingAddress->build() : $this->billingAddress)
        );
    }

    public static function of(): CartDraftBuilder
    {
        return new self();
    }
}