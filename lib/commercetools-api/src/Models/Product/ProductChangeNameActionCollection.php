<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Product;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<ProductChangeNameAction>
 *
 * @method ProductChangeNameAction current()
 * @method ProductChangeNameAction at($offset)
 */
class ProductChangeNameActionCollection extends MapperSequence
{
    /**
     * @psalm-assert ProductChangeNameAction $value
     * @psalm-param ProductChangeNameAction|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return ProductChangeNameActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductChangeNameAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductChangeNameAction
     */
    protected function mapper()
    {
        return function (int $index): ?ProductChangeNameAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ProductChangeNameActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}