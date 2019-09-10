<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Subscription;

use Commercetools\Base\Builder;

/**
 * @implements Builder<AzureEventGridDestination>
 */
final class AzureEventGridDestinationBuilder implements Builder
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
    private $uri;

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
    public function getUri()
    {
        return $this->uri;
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
    public function withUri(?string $uri)
    {
        $this->uri = $uri;

        return $this;
    }

    public function build(): AzureEventGridDestination
    {
        return new AzureEventGridDestinationModel(
            $this->type,
            $this->accessKey,
            $this->uri
        );
    }

    public static function of(): AzureEventGridDestinationBuilder
    {
        return new self();
    }
}
