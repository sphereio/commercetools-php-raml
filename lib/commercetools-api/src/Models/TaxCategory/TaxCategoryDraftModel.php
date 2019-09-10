<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\TaxCategory;

use Commercetools\Base\JsonObjectModel;
use stdClass;

final class TaxCategoryDraftModel extends JsonObjectModel implements TaxCategoryDraft
{
    /**
     * @var ?TaxRateDraftCollection
     */
    protected $rates;

    /**
     * @var ?string
     */
    protected $name;

    /**
     * @var ?string
     */
    protected $description;

    /**
     * @var ?string
     */
    protected $key;

    public function __construct(
        TaxRateDraftCollection $rates = null,
        string $name = null,
        string $description = null,
        string $key = null
    ) {
        $this->rates = $rates;
        $this->name = $name;
        $this->description = $description;
        $this->key = $key;
    }

    /**
     * @return null|TaxRateDraftCollection
     */
    public function getRates()
    {
        if (is_null($this->rates)) {
            /** @psalm-var ?array<int, stdClass> $data */
            $data = $this->raw(TaxCategoryDraft::FIELD_RATES);
            if (is_null($data)) {
                return null;
            }
            $this->rates = TaxRateDraftCollection::fromArray($data);
        }

        return $this->rates;
    }

    /**
     * @return null|string
     */
    public function getName()
    {
        if (is_null($this->name)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(TaxCategoryDraft::FIELD_NAME);
            if (is_null($data)) {
                return null;
            }
            $this->name = (string) $data;
        }

        return $this->name;
    }

    /**
     * @return null|string
     */
    public function getDescription()
    {
        if (is_null($this->description)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(TaxCategoryDraft::FIELD_DESCRIPTION);
            if (is_null($data)) {
                return null;
            }
            $this->description = (string) $data;
        }

        return $this->description;
    }

    /**
     * @return null|string
     */
    public function getKey()
    {
        if (is_null($this->key)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(TaxCategoryDraft::FIELD_KEY);
            if (is_null($data)) {
                return null;
            }
            $this->key = (string) $data;
        }

        return $this->key;
    }

    public function setRates(?TaxRateDraftCollection $rates): void
    {
        $this->rates = $rates;
    }

    public function setName(?string $name): void
    {
        $this->name = $name;
    }

    public function setDescription(?string $description): void
    {
        $this->description = $description;
    }

    public function setKey(?string $key): void
    {
        $this->key = $key;
    }
}
