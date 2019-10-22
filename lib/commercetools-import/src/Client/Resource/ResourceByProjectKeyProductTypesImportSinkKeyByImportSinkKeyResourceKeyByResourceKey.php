<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Client\Resource;

use Commercetools\Client\ApiResource;

/** @psalm-suppress PropertyNotSetInConstructor */
class ResourceByProjectKeyProductTypesImportSinkKeyByImportSinkKeyResourceKeyByResourceKey extends ApiResource
{
    /**
     * @psalm-param ?object $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     *
     * @param null|mixed $body
     */
    public function delete($body = null, array $headers = []): ByProjectKeyProductTypesImportSinkKeyByImportSinkKeyResourceKeyByResourceKeyDelete
    {
        $args = $this->getArgs();

        return new ByProjectKeyProductTypesImportSinkKeyByImportSinkKeyResourceKeyByResourceKeyDelete($args['projectKey'], $args['importSinkKey'], $args['resourceKey'], $body, $headers, $this->getClient());
    }
}