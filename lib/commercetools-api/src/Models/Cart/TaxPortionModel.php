<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Api\Models\Common\Money;
use Commercetools\Api\Models\Common\MoneyModel;
use Commercetools\Base\JsonObjectModel;
use stdClass;

final class TaxPortionModel extends JsonObjectModel implements TaxPortion
{
    /**
     * @var ?Money
     */
    protected $amount;

    /**
     * @var ?int
     */
    protected $rate;

    /**
     * @var ?string
     */
    protected $name;

    public function __construct(
        Money $amount = null,
        int $rate = null,
        string $name = null
    ) {
        $this->amount = $amount;
        $this->rate = $rate;
        $this->name = $name;
    }

    /**
     * @return null|Money
     */
    public function getAmount()
    {
        if (is_null($this->amount)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(TaxPortion::FIELD_AMOUNT);
            if (is_null($data)) {
                return null;
            }

            $this->amount = MoneyModel::of($data);
        }

        return $this->amount;
    }

    /**
     * @return null|int
     */
    public function getRate()
    {
        if (is_null($this->rate)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(TaxPortion::FIELD_RATE);
            if (is_null($data)) {
                return null;
            }
            $this->rate = (int) $data;
        }

        return $this->rate;
    }

    /**
     * @return null|string
     */
    public function getName()
    {
        if (is_null($this->name)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(TaxPortion::FIELD_NAME);
            if (is_null($data)) {
                return null;
            }
            $this->name = (string) $data;
        }

        return $this->name;
    }

    public function setAmount(?Money $amount): void
    {
        $this->amount = $amount;
    }

    public function setRate(?int $rate): void
    {
        $this->rate = $rate;
    }

    public function setName(?string $name): void
    {
        $this->name = $name;
    }
}
