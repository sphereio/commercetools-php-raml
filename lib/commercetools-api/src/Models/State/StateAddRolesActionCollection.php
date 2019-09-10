<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\State;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<StateAddRolesAction>
 *
 * @method StateAddRolesAction current()
 * @method StateAddRolesAction at($offset)
 */
class StateAddRolesActionCollection extends MapperSequence
{
    /**
     * @psalm-assert StateAddRolesAction $value
     * @psalm-param StateAddRolesAction|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return StateAddRolesActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof StateAddRolesAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StateAddRolesAction
     */
    protected function mapper()
    {
        return function (int $index): ?StateAddRolesAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = StateAddRolesActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
