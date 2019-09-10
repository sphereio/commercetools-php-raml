<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Type;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<CustomFieldMoneyType>
 *
 * @method CustomFieldMoneyType current()
 * @method CustomFieldMoneyType at($offset)
 */
class CustomFieldMoneyTypeCollection extends MapperSequence
{
    /**
     * @psalm-assert CustomFieldMoneyType $value
     * @psalm-param CustomFieldMoneyType|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return CustomFieldMoneyTypeCollection
     */
    public function add($value)
    {
        if (!$value instanceof CustomFieldMoneyType) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CustomFieldMoneyType
     */
    protected function mapper()
    {
        return function (int $index): ?CustomFieldMoneyType {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = CustomFieldMoneyTypeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
