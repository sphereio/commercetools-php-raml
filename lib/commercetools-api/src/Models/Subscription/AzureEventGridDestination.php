<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Subscription;

interface AzureEventGridDestination extends Destination
{
    const FIELD_URI = 'uri';
    const FIELD_ACCESS_KEY = 'accessKey';

    /**
     * @return null|string
     */
    public function getUri();

    /**
     * @return null|string
     */
    public function getAccessKey();

    public function setUri(?string $uri): void;

    public function setAccessKey(?string $accessKey): void;
}
