<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\CartDiscount;

use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use DateTimeImmutable;

final class CartDiscountSetValidFromActionModel extends JsonObjectModel implements CartDiscountSetValidFromAction
{
    const DISCRIMINATOR_VALUE = 'setValidFrom';

    /**
     * @var ?string
     */
    protected $action;

    /**
     * @var ?DateTimeImmutable
     */
    protected $validFrom;

    public function __construct(
        string $action = null,
        DateTimeImmutable $validFrom = null
    ) {
        $this->action = $action;
        $this->validFrom = $validFrom;
    }

    /**
     * @return null|string
     */
    public function getAction()
    {
        if (is_null($this->action)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(CartDiscountUpdateAction::FIELD_ACTION);
            if (is_null($data)) {
                return null;
            }
            $this->action = (string) $data;
        }

        return $this->action;
    }

    /**
     * @return null|DateTimeImmutable
     */
    public function getValidFrom()
    {
        if (is_null($this->validFrom)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(CartDiscountSetValidFromAction::FIELD_VALID_FROM);
            if (is_null($data)) {
                return null;
            }
            $data = DateTimeImmutable::createFromFormat(MapperFactory::DATETIME_FORMAT, $data);
            if (false === $data) {
                return null;
            }
            $this->validFrom = $data;
        }

        return $this->validFrom;
    }

    public function setAction(?string $action): void
    {
        $this->action = $action;
    }

    public function setValidFrom(?DateTimeImmutable $validFrom): void
    {
        $this->validFrom = $validFrom;
    }

    public function jsonSerialize()
    {
        $data = $this->toArray();
        if (isset($data[CartDiscountSetValidFromAction::FIELD_VALID_FROM]) && $data[CartDiscountSetValidFromAction::FIELD_VALID_FROM] instanceof \DateTimeImmutable) {
            $data[CartDiscountSetValidFromAction::FIELD_VALID_FROM] = $data[CartDiscountSetValidFromAction::FIELD_VALID_FROM]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }

        return (object) $data;
    }
}
