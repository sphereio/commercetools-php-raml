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
 * @extends MapperSequence<CustomFieldLocalizedEnumValue>
 *
 * @method CustomFieldLocalizedEnumValue current()
 * @method CustomFieldLocalizedEnumValue at($offset)
 */
class CustomFieldLocalizedEnumValueCollection extends MapperSequence
{
    /**
     * @psalm-assert CustomFieldLocalizedEnumValue $value
     * @psalm-param CustomFieldLocalizedEnumValue|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return CustomFieldLocalizedEnumValueCollection
     */
    public function add($value)
    {
        if (!$value instanceof CustomFieldLocalizedEnumValue) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CustomFieldLocalizedEnumValue
     */
    protected function mapper()
    {
        return function (int $index): ?CustomFieldLocalizedEnumValue {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = CustomFieldLocalizedEnumValueModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
