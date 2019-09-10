<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Common;

use Commercetools\Base\JsonObjectModel;

final class MoneyModel extends JsonObjectModel implements Money
{
    /**
     * @var ?int
     */
    protected $centAmount;

    /**
     * @var ?string
     */
    protected $currencyCode;

    public function __construct(
        int $centAmount = null,
        string $currencyCode = null
    ) {
        $this->centAmount = $centAmount;
        $this->currencyCode = $currencyCode;
    }

    /**
     * @return null|int
     */
    public function getCentAmount()
    {
        if (is_null($this->centAmount)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(Money::FIELD_CENT_AMOUNT);
            if (is_null($data)) {
                return null;
            }
            $this->centAmount = (int) $data;
        }

        return $this->centAmount;
    }

    /**
     * <p>The currency code compliant to <a href="https://en.wikipedia.org/wiki/ISO_4217">ISO 4217</a>.</p>.
     *
     * @return null|string
     */
    public function getCurrencyCode()
    {
        if (is_null($this->currencyCode)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(Money::FIELD_CURRENCY_CODE);
            if (is_null($data)) {
                return null;
            }
            $this->currencyCode = (string) $data;
        }

        return $this->currencyCode;
    }

    public function setCentAmount(?int $centAmount): void
    {
        $this->centAmount = $centAmount;
    }

    public function setCurrencyCode(?string $currencyCode): void
    {
        $this->currencyCode = $currencyCode;
    }
}
