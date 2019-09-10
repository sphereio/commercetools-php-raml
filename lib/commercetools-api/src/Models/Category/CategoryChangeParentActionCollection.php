<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Category;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<CategoryChangeParentAction>
 *
 * @method CategoryChangeParentAction current()
 * @method CategoryChangeParentAction at($offset)
 */
class CategoryChangeParentActionCollection extends MapperSequence
{
    /**
     * @psalm-assert CategoryChangeParentAction $value
     * @psalm-param CategoryChangeParentAction|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return CategoryChangeParentActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof CategoryChangeParentAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CategoryChangeParentAction
     */
    protected function mapper()
    {
        return function (int $index): ?CategoryChangeParentAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = CategoryChangeParentActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
