<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductDiscount;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<ProductDiscountSetDescriptionAction>
 *
 * @method ProductDiscountSetDescriptionAction current()
 * @method ProductDiscountSetDescriptionAction at($offset)
 */
class ProductDiscountSetDescriptionActionCollection extends MapperSequence
{
    /**
     * @psalm-assert ProductDiscountSetDescriptionAction $value
     * @psalm-param ProductDiscountSetDescriptionAction|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return ProductDiscountSetDescriptionActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductDiscountSetDescriptionAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductDiscountSetDescriptionAction
     */
    protected function mapper()
    {
        return function (int $index): ?ProductDiscountSetDescriptionAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ProductDiscountSetDescriptionActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
