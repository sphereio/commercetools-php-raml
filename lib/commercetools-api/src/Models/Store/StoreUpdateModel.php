<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Store;

use Commercetools\Base\JsonObjectModel;
use stdClass;

final class StoreUpdateModel extends JsonObjectModel implements StoreUpdate
{
    /**
     * @var ?StoreUpdateActionCollection
     */
    protected $actions;

    /**
     * @var ?int
     */
    protected $version;

    public function __construct(
        StoreUpdateActionCollection $actions = null,
        int $version = null
    ) {
        $this->actions = $actions;
        $this->version = $version;
    }

    /**
     * @return null|StoreUpdateActionCollection
     */
    public function getActions()
    {
        if (is_null($this->actions)) {
            /** @psalm-var ?array<int, stdClass> $data */
            $data = $this->raw(StoreUpdate::FIELD_ACTIONS);
            if (is_null($data)) {
                return null;
            }
            $this->actions = StoreUpdateActionCollection::fromArray($data);
        }

        return $this->actions;
    }

    /**
     * @return null|int
     */
    public function getVersion()
    {
        if (is_null($this->version)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(StoreUpdate::FIELD_VERSION);
            if (is_null($data)) {
                return null;
            }
            $this->version = (int) $data;
        }

        return $this->version;
    }

    public function setActions(?StoreUpdateActionCollection $actions): void
    {
        $this->actions = $actions;
    }

    public function setVersion(?int $version): void
    {
        $this->version = $version;
    }
}
