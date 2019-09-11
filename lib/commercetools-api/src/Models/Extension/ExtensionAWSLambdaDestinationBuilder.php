<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Extension;

use Commercetools\Base\Builder;

/**
 * @implements Builder<ExtensionAWSLambdaDestination>
 */
final class ExtensionAWSLambdaDestinationBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $type;

    /**
     * @var ?string
     */
    private $accessKey;

    /**
     * @var ?string
     */
    private $arn;

    /**
     * @var ?string
     */
    private $accessSecret;

    public function __construct()
    {
    }

    /**
     * @return null|string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @return null|string
     */
    public function getAccessKey()
    {
        return $this->accessKey;
    }

    /**
     * @return null|string
     */
    public function getArn()
    {
        return $this->arn;
    }

    /**
     * @return null|string
     */
    public function getAccessSecret()
    {
        return $this->accessSecret;
    }

    /**
     * @return $this
     */
    public function withType(?string $type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @return $this
     */
    public function withAccessKey(?string $accessKey)
    {
        $this->accessKey = $accessKey;

        return $this;
    }

    /**
     * @return $this
     */
    public function withArn(?string $arn)
    {
        $this->arn = $arn;

        return $this;
    }

    /**
     * @return $this
     */
    public function withAccessSecret(?string $accessSecret)
    {
        $this->accessSecret = $accessSecret;

        return $this;
    }

    public function build(): ExtensionAWSLambdaDestination
    {
        return new ExtensionAWSLambdaDestinationModel(
            $this->type,
            $this->accessKey,
            $this->arn,
            $this->accessSecret
        );
    }

    public static function of(): ExtensionAWSLambdaDestinationBuilder
    {
        return new self();
    }
}