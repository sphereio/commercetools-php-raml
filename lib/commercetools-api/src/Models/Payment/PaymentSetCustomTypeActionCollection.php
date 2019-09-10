<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Payment;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<PaymentSetCustomTypeAction>
 *
 * @method PaymentSetCustomTypeAction current()
 * @method PaymentSetCustomTypeAction at($offset)
 */
class PaymentSetCustomTypeActionCollection extends MapperSequence
{
    /**
     * @psalm-assert PaymentSetCustomTypeAction $value
     * @psalm-param PaymentSetCustomTypeAction|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return PaymentSetCustomTypeActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof PaymentSetCustomTypeAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?PaymentSetCustomTypeAction
     */
    protected function mapper()
    {
        return function (int $index): ?PaymentSetCustomTypeAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = PaymentSetCustomTypeActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
