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
 * @extends MapperSequence<CustomFieldSetType>
 *
 * @method CustomFieldSetType current()
 * @method CustomFieldSetType at($offset)
 */
class CustomFieldSetTypeCollection extends MapperSequence
{
    /**
     * @psalm-assert CustomFieldSetType $value
     * @psalm-param CustomFieldSetType|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return CustomFieldSetTypeCollection
     */
    public function add($value)
    {
        if (!$value instanceof CustomFieldSetType) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CustomFieldSetType
     */
    protected function mapper()
    {
        return function (int $index): ?CustomFieldSetType {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = CustomFieldSetTypeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}