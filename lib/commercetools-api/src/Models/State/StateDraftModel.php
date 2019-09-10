<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\State;

use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Api\Models\Common\LocalizedStringModel;
use Commercetools\Base\JsonObjectModel;
use stdClass;

final class StateDraftModel extends JsonObjectModel implements StateDraft
{
    /**
     * @var ?bool
     */
    protected $initial;

    /**
     * @var ?array
     */
    protected $roles;

    /**
     * @var ?LocalizedString
     */
    protected $name;

    /**
     * @var ?LocalizedString
     */
    protected $description;

    /**
     * @var ?StateResourceIdentifierCollection
     */
    protected $transitions;

    /**
     * @var ?string
     */
    protected $type;

    /**
     * @var ?string
     */
    protected $key;

    public function __construct(
        bool $initial = null,
        array $roles = null,
        LocalizedString $name = null,
        LocalizedString $description = null,
        StateResourceIdentifierCollection $transitions = null,
        string $type = null,
        string $key = null
    ) {
        $this->initial = $initial;
        $this->roles = $roles;
        $this->name = $name;
        $this->description = $description;
        $this->transitions = $transitions;
        $this->type = $type;
        $this->key = $key;
    }

    /**
     * @return null|bool
     */
    public function getInitial()
    {
        if (is_null($this->initial)) {
            /** @psalm-var ?bool $data */
            $data = $this->raw(StateDraft::FIELD_INITIAL);
            if (is_null($data)) {
                return null;
            }
            $this->initial = (bool) $data;
        }

        return $this->initial;
    }

    /**
     * @return null|array
     */
    public function getRoles()
    {
        if (is_null($this->roles)) {
            /** @psalm-var ?array<int, mixed> $data */
            $data = $this->raw(StateDraft::FIELD_ROLES);
            if (is_null($data)) {
                return null;
            }
            $this->roles = $data;
        }

        return $this->roles;
    }

    /**
     * @return null|LocalizedString
     */
    public function getName()
    {
        if (is_null($this->name)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(StateDraft::FIELD_NAME);
            if (is_null($data)) {
                return null;
            }

            $this->name = LocalizedStringModel::of($data);
        }

        return $this->name;
    }

    /**
     * @return null|LocalizedString
     */
    public function getDescription()
    {
        if (is_null($this->description)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(StateDraft::FIELD_DESCRIPTION);
            if (is_null($data)) {
                return null;
            }

            $this->description = LocalizedStringModel::of($data);
        }

        return $this->description;
    }

    /**
     * @return null|StateResourceIdentifierCollection
     */
    public function getTransitions()
    {
        if (is_null($this->transitions)) {
            /** @psalm-var ?array<int, stdClass> $data */
            $data = $this->raw(StateDraft::FIELD_TRANSITIONS);
            if (is_null($data)) {
                return null;
            }
            $this->transitions = StateResourceIdentifierCollection::fromArray($data);
        }

        return $this->transitions;
    }

    /**
     * @return null|string
     */
    public function getType()
    {
        if (is_null($this->type)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(StateDraft::FIELD_TYPE);
            if (is_null($data)) {
                return null;
            }
            $this->type = (string) $data;
        }

        return $this->type;
    }

    /**
     * @return null|string
     */
    public function getKey()
    {
        if (is_null($this->key)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(StateDraft::FIELD_KEY);
            if (is_null($data)) {
                return null;
            }
            $this->key = (string) $data;
        }

        return $this->key;
    }

    public function setInitial(?bool $initial): void
    {
        $this->initial = $initial;
    }

    public function setRoles(?array $roles): void
    {
        $this->roles = $roles;
    }

    public function setName(?LocalizedString $name): void
    {
        $this->name = $name;
    }

    public function setDescription(?LocalizedString $description): void
    {
        $this->description = $description;
    }

    public function setTransitions(?StateResourceIdentifierCollection $transitions): void
    {
        $this->transitions = $transitions;
    }

    public function setType(?string $type): void
    {
        $this->type = $type;
    }

    public function setKey(?string $key): void
    {
        $this->key = $key;
    }
}
