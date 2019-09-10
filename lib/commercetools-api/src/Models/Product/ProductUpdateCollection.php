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
 * @extends MapperSequence<ProductUpdate>
 *
 * @method ProductUpdate current()
 * @method ProductUpdate at($offset)
 */
class ProductUpdateCollection extends MapperSequence
{
    /**
     * @psalm-assert ProductUpdate $value
     * @psalm-param ProductUpdate|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return ProductUpdateCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductUpdate) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductUpdate
     */
    protected function mapper()
    {
        return function (int $index): ?ProductUpdate {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ProductUpdateModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
