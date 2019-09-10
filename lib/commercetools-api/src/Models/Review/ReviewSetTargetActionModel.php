<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Review;

use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use stdClass;

final class ReviewSetTargetActionModel extends JsonObjectModel implements ReviewSetTargetAction
{
    const DISCRIMINATOR_VALUE = 'setTarget';

    /**
     * @var ?string
     */
    protected $action;

    /**
     * @var ?JsonObject
     */
    protected $target;

    public function __construct(
        string $action = null,
        JsonObject $target = null
    ) {
        $this->action = $action;
        $this->target = $target;
    }

    /**
     * @return null|string
     */
    public function getAction()
    {
        if (is_null($this->action)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(ReviewUpdateAction::FIELD_ACTION);
            if (is_null($data)) {
                return null;
            }
            $this->action = (string) $data;
        }

        return $this->action;
    }

    /**
     * @return null|JsonObject
     */
    public function getTarget()
    {
        if (is_null($this->target)) {
            /** @psalm-var ?stdClass $data */
            $data = $this->raw(ReviewSetTargetAction::FIELD_TARGET);
            if (is_null($data)) {
                return null;
            }
            $this->target = JsonObjectModel::of($data);
        }

        return $this->target;
    }

    public function setAction(?string $action): void
    {
        $this->action = $action;
    }

    public function setTarget(?JsonObject $target): void
    {
        $this->target = $target;
    }
}
