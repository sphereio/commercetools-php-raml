<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<StagedOrderChangeShipmentStateAction>
 *
 * @method StagedOrderChangeShipmentStateAction current()
 * @method StagedOrderChangeShipmentStateAction at($offset)
 */
class StagedOrderChangeShipmentStateActionCollection extends MapperSequence
{
    /**
     * @psalm-assert StagedOrderChangeShipmentStateAction $value
     * @psalm-param StagedOrderChangeShipmentStateAction|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return StagedOrderChangeShipmentStateActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof StagedOrderChangeShipmentStateAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StagedOrderChangeShipmentStateAction
     */
    protected function mapper()
    {
        return function (int $index): ?StagedOrderChangeShipmentStateAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = StagedOrderChangeShipmentStateActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
