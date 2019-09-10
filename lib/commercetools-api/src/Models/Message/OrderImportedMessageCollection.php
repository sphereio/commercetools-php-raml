<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<OrderImportedMessage>
 *
 * @method OrderImportedMessage current()
 * @method OrderImportedMessage at($offset)
 */
class OrderImportedMessageCollection extends MapperSequence
{
    /**
     * @psalm-assert OrderImportedMessage $value
     * @psalm-param OrderImportedMessage|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return OrderImportedMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof OrderImportedMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?OrderImportedMessage
     */
    protected function mapper()
    {
        return function (int $index): ?OrderImportedMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = OrderImportedMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
