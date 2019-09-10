<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Subscription;

use Commercetools\Base\JsonObjectModel;

final class AzureServiceBusDestinationModel extends JsonObjectModel implements AzureServiceBusDestination
{
    const DISCRIMINATOR_VALUE = 'AzureServiceBus';

    /**
     * @var ?string
     */
    protected $type;

    /**
     * @var ?string
     */
    protected $connectionString;

    public function __construct(
        string $type = null,
        string $connectionString = null
    ) {
        $this->type = $type;
        $this->connectionString = $connectionString;
    }

    /**
     * @return null|string
     */
    public function getType()
    {
        if (is_null($this->type)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(Destination::FIELD_TYPE);
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
    public function getConnectionString()
    {
        if (is_null($this->connectionString)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(AzureServiceBusDestination::FIELD_CONNECTION_STRING);
            if (is_null($data)) {
                return null;
            }
            $this->connectionString = (string) $data;
        }

        return $this->connectionString;
    }

    public function setType(?string $type): void
    {
        $this->type = $type;
    }

    public function setConnectionString(?string $connectionString): void
    {
        $this->connectionString = $connectionString;
    }
}
