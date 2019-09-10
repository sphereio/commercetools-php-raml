<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\State;

use Commercetools\Base\JsonObjectModel;

final class StateRemoveRolesActionModel extends JsonObjectModel implements StateRemoveRolesAction
{
    const DISCRIMINATOR_VALUE = 'removeRoles';

    /**
     * @var ?string
     */
    protected $action;

    /**
     * @var ?array
     */
    protected $roles;

    public function __construct(
        string $action = null,
        array $roles = null
    ) {
        $this->action = $action;
        $this->roles = $roles;
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
     * @return null|array
     */
    public function getRoles()
    {
        if (is_null($this->roles)) {
            /** @psalm-var ?array<int, mixed> $data */
            $data = $this->raw(StateRemoveRolesAction::FIELD_ROLES);
            if (is_null($data)) {
                return null;
            }
            $this->roles = $data;
        }

        return $this->roles;
    }

    public function setAction(?string $action): void
    {
        $this->action = $action;
    }

    public function setRoles(?array $roles): void
    {
        $this->roles = $roles;
    }
}
