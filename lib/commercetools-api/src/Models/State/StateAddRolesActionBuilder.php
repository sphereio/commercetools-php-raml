<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\State;

use Commercetools\Base\Builder;

/**
 * @implements Builder<StateAddRolesAction>
 */
final class StateAddRolesActionBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $action;

    /**
     * @var ?array
     */
    private $roles;

    public function __construct()
    {
    }

    /**
     * @return null|string
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * @return null|array
     */
    public function getRoles()
    {
        return $this->roles;
    }

    /**
     * @return $this
     */
    public function withAction(?string $action)
    {
        $this->action = $action;

        return $this;
    }

    /**
     * @return $this
     */
    public function withRoles(?array $roles)
    {
        $this->roles = $roles;

        return $this;
    }

    public function build(): StateAddRolesAction
    {
        return new StateAddRolesActionModel(
            $this->action,
            $this->roles
        );
    }

    public static function of(): StateAddRolesActionBuilder
    {
        return new self();
    }
}