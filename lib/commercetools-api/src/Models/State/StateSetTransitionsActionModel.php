<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\State;

use Commercetools\Base\JsonObjectModel;
use stdClass;

final class StateSetTransitionsActionModel extends JsonObjectModel implements StateSetTransitionsAction
{
    const DISCRIMINATOR_VALUE = 'setTransitions';

    /**
     * @var ?string
     */
    protected $action;

    /**
     * @var ?StateResourceIdentifierCollection
     */
    protected $transitions;

    public function __construct(
        string $action = null,
        StateResourceIdentifierCollection $transitions = null
    ) {
        $this->action = $action;
        $this->transitions = $transitions;
    }

    /**
     * @return null|string
     */
    public function getAction()
    {
        if (is_null($this->action)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(StateUpdateAction::FIELD_ACTION);
            if (is_null($data)) {
                return null;
            }
            $this->action = (string) $data;
        }

        return $this->action;
    }

    /**
     * @return null|StateResourceIdentifierCollection
     */
    public function getTransitions()
    {
        if (is_null($this->transitions)) {
            /** @psalm-var ?array<int, stdClass> $data */
            $data = $this->raw(StateSetTransitionsAction::FIELD_TRANSITIONS);
            if (is_null($data)) {
                return null;
            }
            $this->transitions = StateResourceIdentifierCollection::fromArray($data);
        }

        return $this->transitions;
    }

    public function setAction(?string $action): void
    {
        $this->action = $action;
    }

    public function setTransitions(?StateResourceIdentifierCollection $transitions): void
    {
        $this->transitions = $transitions;
    }
}