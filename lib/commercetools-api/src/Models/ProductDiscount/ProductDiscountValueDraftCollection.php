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
 * @extends MapperSequence<ProductDiscountValueDraft>
 *
 * @method ProductDiscountValueDraft current()
 * @method ProductDiscountValueDraft at($offset)
 */
class ProductDiscountValueDraftCollection extends MapperSequence
{
    /**
     * @psalm-assert ProductDiscountValueDraft $value
     * @psalm-param ProductDiscountValueDraft|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return ProductDiscountValueDraftCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductDiscountValueDraft) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductDiscountValueDraft
     */
    protected function mapper()
    {
        return function (int $index): ?ProductDiscountValueDraft {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ProductDiscountValueDraftModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}