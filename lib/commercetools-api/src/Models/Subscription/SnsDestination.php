<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Subscription;

interface SnsDestination extends Destination
{
    const FIELD_ACCESS_KEY = 'accessKey';
    const FIELD_ACCESS_SECRET = 'accessSecret';
    const FIELD_TOPIC_ARN = 'topicArn';

    /**
     * @return null|string
     */
    public function getAccessKey();

    /**
     * @return null|string
     */
    public function getAccessSecret();

    /**
     * @return null|string
     */
    public function getTopicArn();

    public function setAccessKey(?string $accessKey): void;

    public function setAccessSecret(?string $accessSecret): void;

    public function setTopicArn(?string $topicArn): void;
}