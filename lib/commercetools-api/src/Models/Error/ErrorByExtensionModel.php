<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Error;

use Commercetools\Base\JsonObjectModel;

final class ErrorByExtensionModel extends JsonObjectModel implements ErrorByExtension
{
    /**
     * @var ?string
     */
    protected $id;

    /**
     * @var ?string
     */
    protected $key;

    public function __construct(
        string $id = null,
        string $key = null
    ) {
        $this->id = $id;
        $this->key = $key;
    }

    /**
     * @return null|string
     */
    public function getId()
    {
        if (is_null($this->id)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(ErrorByExtension::FIELD_ID);
            if (is_null($data)) {
                return null;
            }
            $this->id = (string) $data;
        }

        return $this->id;
    }

    /**
     * @return null|string
     */
    public function getKey()
    {
        if (is_null($this->key)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(ErrorByExtension::FIELD_KEY);
            if (is_null($data)) {
                return null;
            }
            $this->key = (string) $data;
        }

        return $this->key;
    }

    public function setId(?string $id): void
    {
        $this->id = $id;
    }

    public function setKey(?string $key): void
    {
        $this->key = $key;
    }
}