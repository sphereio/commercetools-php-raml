<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ShoppingList;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<ShoppingListSetKeyAction>
 *
 * @method ShoppingListSetKeyAction current()
 * @method ShoppingListSetKeyAction at($offset)
 */
class ShoppingListSetKeyActionCollection extends MapperSequence
{
    /**
     * @psalm-assert ShoppingListSetKeyAction $value
     * @psalm-param ShoppingListSetKeyAction|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return ShoppingListSetKeyActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ShoppingListSetKeyAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ShoppingListSetKeyAction
     */
    protected function mapper()
    {
        return function (int $index): ?ShoppingListSetKeyAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ShoppingListSetKeyActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
