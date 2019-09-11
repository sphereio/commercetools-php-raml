<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Client\Resource;

use Commercetools\Api\Models\CustomObject\CustomObjectDraft;
use Commercetools\Client\ApiResource;

/** @psalm-suppress PropertyNotSetInConstructor */
class ResourceByProjectKeyCustomObjects extends ApiResource
{
    /**
     * @psalm-param scalar $container
     * @psalm-param scalar $key
     *
     * @param null|mixed $container
     * @param null|mixed $key
     */
    public function withContainerAndKey($container = null, $key = null): ResourceByProjectKeyCustomObjectsByContainerByKey
    {
        $args = $this->getArgs();
        if (!is_null($container)) {
            $args['container'] = $container;
        }
        if (!is_null($key)) {
            $args['key'] = $key;
        }

        return new ResourceByProjectKeyCustomObjectsByContainerByKey($this->getUri().'/{container}/{key}', $args, $this->getClient());
    }

    /**
     * @psalm-param scalar $ID
     *
     * @param null|mixed $ID
     */
    public function withId($ID = null): ResourceByProjectKeyCustomObjectsByID
    {
        $args = $this->getArgs();
        if (!is_null($ID)) {
            $args['ID'] = $ID;
        }

        return new ResourceByProjectKeyCustomObjectsByID($this->getUri().'/{ID}', $args, $this->getClient());
    }

    /**
     * @psalm-param ?object $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     *
     * @param null|mixed $body
     */
    public function get($body = null, array $headers = []): ByProjectKeyCustomObjectsGet
    {
        $args = $this->getArgs();

        return new ByProjectKeyCustomObjectsGet($args['projectKey'], $body, $headers, $this->getClient());
    }

    /**
     * @psalm-param ?CustomObjectDraft $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function post(?CustomObjectDraft $body = null, array $headers = []): ByProjectKeyCustomObjectsPost
    {
        $args = $this->getArgs();

        return new ByProjectKeyCustomObjectsPost($args['projectKey'], $body, $headers, $this->getClient());
    }
}