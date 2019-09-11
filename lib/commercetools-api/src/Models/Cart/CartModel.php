<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Api\Models\CartDiscount\CartDiscountReferenceCollection;
use Commercetools\Api\Models\Common\Address;
use Commercetools\Api\Models\Common\AddressCollection;
use Commercetools\Api\Models\Common\AddressModel;
use Commercetools\Api\Models\Common\BaseResource;
use Commercetools\Api\Models\Common\CreatedBy;
use Commercetools\Api\Models\Common\CreatedByModel;
use Commercetools\Api\Models\Common\LastModifiedBy;
use Commercetools\Api\Models\Common\LastModifiedByModel;
use Commercetools\Api\Models\Common\LoggedResource;
use Commercetools\Api\Models\Common\TypedMoney;
use Commercetools\Api\Models\Common\TypedMoneyModel;
use Commercetools\Api\Models\CustomerGroup\CustomerGroupReference;
use Commercetools\Api\Models\CustomerGroup\CustomerGroupReferenceModel;
use Commercetools\Api\Models\Order\PaymentInfo;
use Commercetools\Api\Models\Order\PaymentInfoModel;
use Commercetools\Api\Models\Store\StoreKeyReference;
use Commercetools\Api\Models\Store\StoreKeyReferenceModel;
use Commercetools\Api\Models\Type\CustomFields;
use Commercetools\Api\Models\Type\CustomFieldsModel;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use DateTimeImmutable;
use stdClass;

final class CartModel extends JsonObjectModel implements Cart
{
    /**
     * @var ?DateTimeImmutable
     */
    protected $createdAt;

    /**
     * @var ?DateTimeImmutable
     */
    protected $lastModifiedAt;

    /**
     * @var ?string
     */
    protected $id;

    /**
     * @var ?int
     */
    protected $version;

    /**
     * @var ?CreatedBy
     */
    protected $createdBy;

    /**
     * @var ?LastModifiedBy
     */
    protected $lastModifiedBy;

    /**
     * @var ?string
     */
    protected $country;

    /**
     * @var ?TypedMoney
     */
    protected $totalPrice;

    /**
     * @var ?ShippingRateInput
     */
    protected $shippingRateInput;

    /**
     * @var ?TaxedPrice
     */
    protected $taxedPrice;

    /**
     * @var ?string
     */
    protected $origin;

    /**
     * @var ?int
     */
    protected $deleteDaysAfterLastModification;

    /**
     * @var ?ShippingInfo
     */
    protected $shippingInfo;

    /**
     * @var ?CartDiscountReferenceCollection
     */
    protected $refusedGifts;

    /**
     * @var ?string
     */
    protected $locale;

    /**
     * @var ?string
     */
    protected $inventoryMode;

    /**
     * @var ?LineItemCollection
     */
    protected $lineItems;

    /**
     * @var ?CustomLineItemCollection
     */
    protected $customLineItems;

    /**
     * @var ?AddressCollection
     */
    protected $itemShippingAddresses;

    /**
     * @var ?string
     */
    protected $customerEmail;

    /**
     * @var ?string
     */
    protected $cartState;

    /**
     * @var ?string
     */
    protected $customerId;

    /**
     * @var ?string
     */
    protected $anonymousId;

    /**
     * @var ?DiscountCodeInfoCollection
     */
    protected $discountCodes;

    /**
     * @var ?CustomerGroupReference
     */
    protected $customerGroup;

    /**
     * @var ?CustomFields
     */
    protected $custom;

    /**
     * @var ?string
     */
    protected $taxCalculationMode;

    /**
     * @var ?StoreKeyReference
     */
    protected $store;

    /**
     * @var ?string
     */
    protected $taxRoundingMode;

    /**
     * @var ?string
     */
    protected $taxMode;

    /**
     * @var ?Address
     */
    protected $shippingAddress;

    /**
     * @var ?Address
     */
    protected $billingAddress;

    /**
     * @var ?PaymentInfo
     */
    protected $paymentInfo;

    public function __construct(
        DateTimeImmutable $createdAt = null,
        DateTimeImmutable $lastModifiedAt = null,
        string $id = null,
        int $version = null,
        CreatedBy $createdBy = null,
        LastModifiedBy $lastModifiedBy = null,
        string $country = null,
        TypedMoney $totalPrice = null,
        ShippingRateInput $shippingRateInput = null,
        TaxedPrice $taxedPrice = null,
        string $origin = null,
        int $deleteDaysAfterLastModification = null,
        ShippingInfo $shippingInfo = null,
        CartDiscountReferenceCollection $refusedGifts = null,
        string $locale = null,
        string $inventoryMode = null,
        LineItemCollection $lineItems = null,
        CustomLineItemCollection $customLineItems = null,
        AddressCollection $itemShippingAddresses = null,
        string $customerEmail = null,
        string $cartState = null,
        string $customerId = null,
        string $anonymousId = null,
        DiscountCodeInfoCollection $discountCodes = null,
        CustomerGroupReference $customerGroup = null,
        CustomFields $custom = null,
        string $taxCalculationMode = null,
        StoreKeyReference $store = null,
        string $taxRoundingMode = null,
        string $taxMode = null,
        Address $shippingAddress = null,
        Address $billingAddress = null,
        PaymentInfo $paymentInfo = null
    ) {
        $this->createdAt = $createdAt;
        $this->lastModifiedAt = $lastModifiedAt;
        $this->id = $id;
        $this->version = $version;
        $this->createdBy = $createdBy;
        $this->lastModifiedBy = $lastModifiedBy;
        $this->country = $country;
        $this->totalPrice = $totalPrice;
        $this->shippingRateInput = $shippingRateInput;
        $this->taxedPrice = $taxedPrice;
        $this->origin = $origin;
        $this->deleteDaysAfterLastModification = $deleteDaysAfterLastModification;
        $this->shippingInfo = $shippingInfo;
        $this->refusedGifts = $refusedGifts;
        $this->locale = $locale;
        $this->inventoryMode = $inventoryMode;
        $this->lineItems = $lineItems;
        $this->customLineItems = $customLineItems;
        $this->itemShippingAddresses = $itemShippingAddresses;
        $this->customerEmail = $customerEmail;
        $this->cartState = $cartState;
        $this->customerId = $customerId;
        $this->anonymousId = $anonymousId;
        $this->discountCodes = $discountCodes;
        $this->customerGroup = $customerGroup;
        $this->custom = $custom;
        $this->taxCalculationMode = $taxCalculationMode;
        $this->store = $store;
        $this->taxRoundingMode = $taxRoundingMode;
        $this->taxMode = $taxMode;
        $this->shippingAddress = $shippingAddress;
        $this->billingAddress = $billingAddress;
        $this->paymentInfo = $paymentInfo;
    }

    /**
     * @return null|DateTimeImmutable
     */
    public function getCreatedAt()
    {
        if (is_null($this->createdAt)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(BaseResource::FIELD_CREATED_AT);
            if (is_null($data)) {
                return null;
            }
            $data = DateTimeImmutable::createFromFormat(MapperFactory::DATETIME_FORMAT, $data);
            if (false === $data) {
                return null;
            }
            $this->createdAt = $data;
        }

        return $this->createdAt;
    }

    /**
     * @return null|DateTimeImmutable
     */
    public function getLastModifiedAt()
    {
        if (is_null($this->lastModifiedAt)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(BaseResource::FIELD_LAST_MODIFIED_AT);
            if (is_null($data)) {
                return null;
            }
            $data = DateTimeImmutable::createFromFormat(MapperFactory::DATETIME_FORMAT, $data);
            if (false === $data) {
                return null;
            }
            $this->lastModifiedAt = $data;
        }

        return $this->lastModifiedAt;
    }

    /**
     * @return null|string
     */
    public function getId()
    {
        if (is_null($this->id)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(BaseResource::FIELD_ID);
            if (is_null($data)) {
                return null;
            }
            $this->id = (string) $data;
        }

        return $this->id;
    }

    /**
     * @return null|int
     */
    public function getVersion()
    {
        if (is_null($this->version)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(BaseResource::FIELD_VERSION);
            if (is_null($data)) {
                return null;
            }
            $this->version = (int) $data;
        }

        return $this->version;
    }

    /**
     * @return null|CreatedBy
     */
    public function getCreatedBy()
    {
        if (is_null($this->createdBy)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(LoggedResource::FIELD_CREATED_BY);
            if (is_null($data)) {
                return null;
            }

            $this->createdBy = CreatedByModel::of($data);
        }

        return $this->createdBy;
    }

    /**
     * @return null|LastModifiedBy
     */
    public function getLastModifiedBy()
    {
        if (is_null($this->lastModifiedBy)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(LoggedResource::FIELD_LAST_MODIFIED_BY);
            if (is_null($data)) {
                return null;
            }

            $this->lastModifiedBy = LastModifiedByModel::of($data);
        }

        return $this->lastModifiedBy;
    }

    /**
     * <p>A two-digit country code as per <a href="https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2">ISO 3166-1 alpha-2</a>.</p>.
     *
     * @return null|string
     */
    public function getCountry()
    {
        if (is_null($this->country)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(Cart::FIELD_COUNTRY);
            if (is_null($data)) {
                return null;
            }
            $this->country = (string) $data;
        }

        return $this->country;
    }

    /**
     * @return null|TypedMoney
     */
    public function getTotalPrice()
    {
        if (is_null($this->totalPrice)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(Cart::FIELD_TOTAL_PRICE);
            if (is_null($data)) {
                return null;
            }
            $className = TypedMoneyModel::resolveDiscriminatorClass($data);
            $this->totalPrice = $className::of($data);
        }

        return $this->totalPrice;
    }

    /**
     * @return null|ShippingRateInput
     */
    public function getShippingRateInput()
    {
        if (is_null($this->shippingRateInput)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(Cart::FIELD_SHIPPING_RATE_INPUT);
            if (is_null($data)) {
                return null;
            }
            $className = ShippingRateInputModel::resolveDiscriminatorClass($data);
            $this->shippingRateInput = $className::of($data);
        }

        return $this->shippingRateInput;
    }

    /**
     * @return null|TaxedPrice
     */
    public function getTaxedPrice()
    {
        if (is_null($this->taxedPrice)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(Cart::FIELD_TAXED_PRICE);
            if (is_null($data)) {
                return null;
            }

            $this->taxedPrice = TaxedPriceModel::of($data);
        }

        return $this->taxedPrice;
    }

    /**
     * @return null|string
     */
    public function getOrigin()
    {
        if (is_null($this->origin)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(Cart::FIELD_ORIGIN);
            if (is_null($data)) {
                return null;
            }
            $this->origin = (string) $data;
        }

        return $this->origin;
    }

    /**
     * @return null|int
     */
    public function getDeleteDaysAfterLastModification()
    {
        if (is_null($this->deleteDaysAfterLastModification)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(Cart::FIELD_DELETE_DAYS_AFTER_LAST_MODIFICATION);
            if (is_null($data)) {
                return null;
            }
            $this->deleteDaysAfterLastModification = (int) $data;
        }

        return $this->deleteDaysAfterLastModification;
    }

    /**
     * @return null|ShippingInfo
     */
    public function getShippingInfo()
    {
        if (is_null($this->shippingInfo)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(Cart::FIELD_SHIPPING_INFO);
            if (is_null($data)) {
                return null;
            }

            $this->shippingInfo = ShippingInfoModel::of($data);
        }

        return $this->shippingInfo;
    }

    /**
     * @return null|CartDiscountReferenceCollection
     */
    public function getRefusedGifts()
    {
        if (is_null($this->refusedGifts)) {
            /** @psalm-var ?array<int, stdClass> $data */
            $data = $this->raw(Cart::FIELD_REFUSED_GIFTS);
            if (is_null($data)) {
                return null;
            }
            $this->refusedGifts = CartDiscountReferenceCollection::fromArray($data);
        }

        return $this->refusedGifts;
    }

    /**
     * @return null|string
     */
    public function getLocale()
    {
        if (is_null($this->locale)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(Cart::FIELD_LOCALE);
            if (is_null($data)) {
                return null;
            }
            $this->locale = (string) $data;
        }

        return $this->locale;
    }

    /**
     * @return null|string
     */
    public function getInventoryMode()
    {
        if (is_null($this->inventoryMode)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(Cart::FIELD_INVENTORY_MODE);
            if (is_null($data)) {
                return null;
            }
            $this->inventoryMode = (string) $data;
        }

        return $this->inventoryMode;
    }

    /**
     * @return null|LineItemCollection
     */
    public function getLineItems()
    {
        if (is_null($this->lineItems)) {
            /** @psalm-var ?array<int, stdClass> $data */
            $data = $this->raw(Cart::FIELD_LINE_ITEMS);
            if (is_null($data)) {
                return null;
            }
            $this->lineItems = LineItemCollection::fromArray($data);
        }

        return $this->lineItems;
    }

    /**
     * @return null|CustomLineItemCollection
     */
    public function getCustomLineItems()
    {
        if (is_null($this->customLineItems)) {
            /** @psalm-var ?array<int, stdClass> $data */
            $data = $this->raw(Cart::FIELD_CUSTOM_LINE_ITEMS);
            if (is_null($data)) {
                return null;
            }
            $this->customLineItems = CustomLineItemCollection::fromArray($data);
        }

        return $this->customLineItems;
    }

    /**
     * @return null|AddressCollection
     */
    public function getItemShippingAddresses()
    {
        if (is_null($this->itemShippingAddresses)) {
            /** @psalm-var ?array<int, stdClass> $data */
            $data = $this->raw(Cart::FIELD_ITEM_SHIPPING_ADDRESSES);
            if (is_null($data)) {
                return null;
            }
            $this->itemShippingAddresses = AddressCollection::fromArray($data);
        }

        return $this->itemShippingAddresses;
    }

    /**
     * @return null|string
     */
    public function getCustomerEmail()
    {
        if (is_null($this->customerEmail)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(Cart::FIELD_CUSTOMER_EMAIL);
            if (is_null($data)) {
                return null;
            }
            $this->customerEmail = (string) $data;
        }

        return $this->customerEmail;
    }

    /**
     * @return null|string
     */
    public function getCartState()
    {
        if (is_null($this->cartState)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(Cart::FIELD_CART_STATE);
            if (is_null($data)) {
                return null;
            }
            $this->cartState = (string) $data;
        }

        return $this->cartState;
    }

    /**
     * @return null|string
     */
    public function getCustomerId()
    {
        if (is_null($this->customerId)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(Cart::FIELD_CUSTOMER_ID);
            if (is_null($data)) {
                return null;
            }
            $this->customerId = (string) $data;
        }

        return $this->customerId;
    }

    /**
     * @return null|string
     */
    public function getAnonymousId()
    {
        if (is_null($this->anonymousId)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(Cart::FIELD_ANONYMOUS_ID);
            if (is_null($data)) {
                return null;
            }
            $this->anonymousId = (string) $data;
        }

        return $this->anonymousId;
    }

    /**
     * @return null|DiscountCodeInfoCollection
     */
    public function getDiscountCodes()
    {
        if (is_null($this->discountCodes)) {
            /** @psalm-var ?array<int, stdClass> $data */
            $data = $this->raw(Cart::FIELD_DISCOUNT_CODES);
            if (is_null($data)) {
                return null;
            }
            $this->discountCodes = DiscountCodeInfoCollection::fromArray($data);
        }

        return $this->discountCodes;
    }

    /**
     * @return null|CustomerGroupReference
     */
    public function getCustomerGroup()
    {
        if (is_null($this->customerGroup)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(Cart::FIELD_CUSTOMER_GROUP);
            if (is_null($data)) {
                return null;
            }

            $this->customerGroup = CustomerGroupReferenceModel::of($data);
        }

        return $this->customerGroup;
    }

    /**
     * @return null|CustomFields
     */
    public function getCustom()
    {
        if (is_null($this->custom)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(Cart::FIELD_CUSTOM);
            if (is_null($data)) {
                return null;
            }

            $this->custom = CustomFieldsModel::of($data);
        }

        return $this->custom;
    }

    /**
     * @return null|string
     */
    public function getTaxCalculationMode()
    {
        if (is_null($this->taxCalculationMode)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(Cart::FIELD_TAX_CALCULATION_MODE);
            if (is_null($data)) {
                return null;
            }
            $this->taxCalculationMode = (string) $data;
        }

        return $this->taxCalculationMode;
    }

    /**
     * @return null|StoreKeyReference
     */
    public function getStore()
    {
        if (is_null($this->store)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(Cart::FIELD_STORE);
            if (is_null($data)) {
                return null;
            }

            $this->store = StoreKeyReferenceModel::of($data);
        }

        return $this->store;
    }

    /**
     * @return null|string
     */
    public function getTaxRoundingMode()
    {
        if (is_null($this->taxRoundingMode)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(Cart::FIELD_TAX_ROUNDING_MODE);
            if (is_null($data)) {
                return null;
            }
            $this->taxRoundingMode = (string) $data;
        }

        return $this->taxRoundingMode;
    }

    /**
     * @return null|string
     */
    public function getTaxMode()
    {
        if (is_null($this->taxMode)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(Cart::FIELD_TAX_MODE);
            if (is_null($data)) {
                return null;
            }
            $this->taxMode = (string) $data;
        }

        return $this->taxMode;
    }

    /**
     * @return null|Address
     */
    public function getShippingAddress()
    {
        if (is_null($this->shippingAddress)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(Cart::FIELD_SHIPPING_ADDRESS);
            if (is_null($data)) {
                return null;
            }

            $this->shippingAddress = AddressModel::of($data);
        }

        return $this->shippingAddress;
    }

    /**
     * @return null|Address
     */
    public function getBillingAddress()
    {
        if (is_null($this->billingAddress)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(Cart::FIELD_BILLING_ADDRESS);
            if (is_null($data)) {
                return null;
            }

            $this->billingAddress = AddressModel::of($data);
        }

        return $this->billingAddress;
    }

    /**
     * @return null|PaymentInfo
     */
    public function getPaymentInfo()
    {
        if (is_null($this->paymentInfo)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(Cart::FIELD_PAYMENT_INFO);
            if (is_null($data)) {
                return null;
            }

            $this->paymentInfo = PaymentInfoModel::of($data);
        }

        return $this->paymentInfo;
    }

    public function setCreatedAt(?DateTimeImmutable $createdAt): void
    {
        $this->createdAt = $createdAt;
    }

    public function setLastModifiedAt(?DateTimeImmutable $lastModifiedAt): void
    {
        $this->lastModifiedAt = $lastModifiedAt;
    }

    public function setId(?string $id): void
    {
        $this->id = $id;
    }

    public function setVersion(?int $version): void
    {
        $this->version = $version;
    }

    public function setCreatedBy(?CreatedBy $createdBy): void
    {
        $this->createdBy = $createdBy;
    }

    public function setLastModifiedBy(?LastModifiedBy $lastModifiedBy): void
    {
        $this->lastModifiedBy = $lastModifiedBy;
    }

    public function setCountry(?string $country): void
    {
        $this->country = $country;
    }

    public function setTotalPrice(?TypedMoney $totalPrice): void
    {
        $this->totalPrice = $totalPrice;
    }

    public function setShippingRateInput(?ShippingRateInput $shippingRateInput): void
    {
        $this->shippingRateInput = $shippingRateInput;
    }

    public function setTaxedPrice(?TaxedPrice $taxedPrice): void
    {
        $this->taxedPrice = $taxedPrice;
    }

    public function setOrigin(?string $origin): void
    {
        $this->origin = $origin;
    }

    public function setDeleteDaysAfterLastModification(?int $deleteDaysAfterLastModification): void
    {
        $this->deleteDaysAfterLastModification = $deleteDaysAfterLastModification;
    }

    public function setShippingInfo(?ShippingInfo $shippingInfo): void
    {
        $this->shippingInfo = $shippingInfo;
    }

    public function setRefusedGifts(?CartDiscountReferenceCollection $refusedGifts): void
    {
        $this->refusedGifts = $refusedGifts;
    }

    public function setLocale(?string $locale): void
    {
        $this->locale = $locale;
    }

    public function setInventoryMode(?string $inventoryMode): void
    {
        $this->inventoryMode = $inventoryMode;
    }

    public function setLineItems(?LineItemCollection $lineItems): void
    {
        $this->lineItems = $lineItems;
    }

    public function setCustomLineItems(?CustomLineItemCollection $customLineItems): void
    {
        $this->customLineItems = $customLineItems;
    }

    public function setItemShippingAddresses(?AddressCollection $itemShippingAddresses): void
    {
        $this->itemShippingAddresses = $itemShippingAddresses;
    }

    public function setCustomerEmail(?string $customerEmail): void
    {
        $this->customerEmail = $customerEmail;
    }

    public function setCartState(?string $cartState): void
    {
        $this->cartState = $cartState;
    }

    public function setCustomerId(?string $customerId): void
    {
        $this->customerId = $customerId;
    }

    public function setAnonymousId(?string $anonymousId): void
    {
        $this->anonymousId = $anonymousId;
    }

    public function setDiscountCodes(?DiscountCodeInfoCollection $discountCodes): void
    {
        $this->discountCodes = $discountCodes;
    }

    public function setCustomerGroup(?CustomerGroupReference $customerGroup): void
    {
        $this->customerGroup = $customerGroup;
    }

    public function setCustom(?CustomFields $custom): void
    {
        $this->custom = $custom;
    }

    public function setTaxCalculationMode(?string $taxCalculationMode): void
    {
        $this->taxCalculationMode = $taxCalculationMode;
    }

    public function setStore(?StoreKeyReference $store): void
    {
        $this->store = $store;
    }

    public function setTaxRoundingMode(?string $taxRoundingMode): void
    {
        $this->taxRoundingMode = $taxRoundingMode;
    }

    public function setTaxMode(?string $taxMode): void
    {
        $this->taxMode = $taxMode;
    }

    public function setShippingAddress(?Address $shippingAddress): void
    {
        $this->shippingAddress = $shippingAddress;
    }

    public function setBillingAddress(?Address $billingAddress): void
    {
        $this->billingAddress = $billingAddress;
    }

    public function setPaymentInfo(?PaymentInfo $paymentInfo): void
    {
        $this->paymentInfo = $paymentInfo;
    }

    public function jsonSerialize()
    {
        $data = $this->toArray();
        if (isset($data[BaseResource::FIELD_CREATED_AT]) && $data[BaseResource::FIELD_CREATED_AT] instanceof \DateTimeImmutable) {
            $data[BaseResource::FIELD_CREATED_AT] = $data[BaseResource::FIELD_CREATED_AT]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }

        if (isset($data[BaseResource::FIELD_LAST_MODIFIED_AT]) && $data[BaseResource::FIELD_LAST_MODIFIED_AT] instanceof \DateTimeImmutable) {
            $data[BaseResource::FIELD_LAST_MODIFIED_AT] = $data[BaseResource::FIELD_LAST_MODIFIED_AT]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }

        return (object) $data;
    }
}