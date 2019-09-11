<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\DiscountCode;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<DiscountCodeResourceIdentifier>
 *
 * @method DiscountCodeResourceIdentifier current()
 * @method DiscountCodeResourceIdentifier at($offset)
 */
class DiscountCodeResourceIdentifierCollection extends MapperSequence
{
    /**
     * @psalm-assert DiscountCodeResourceIdentifier $value
     * @psalm-param DiscountCodeResourceIdentifier|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return DiscountCodeResourceIdentifierCollection
     */
    public function add($value)
    {
        if (!$value instanceof DiscountCodeResourceIdentifier) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?DiscountCodeResourceIdentifier
     */
    protected function mapper()
    {
        return function (int $index): ?DiscountCodeResourceIdentifier {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = DiscountCodeResourceIdentifierModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}