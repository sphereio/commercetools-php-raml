<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Client\Resource;

use Commercetools\Api\Models\TaxCategory\TaxCategoryDraft;
use Commercetools\Client\ApiResource;

/** @psalm-suppress PropertyNotSetInConstructor */
class ResourceByProjectKeyTaxCategories extends ApiResource
{
    /**
     * @psalm-param scalar $ID
     *
     * @param null|mixed $ID
     */
    public function withKey($ID = null): ResourceByProjectKeyTaxCategoriesKeyByKey
    {
        $args = $this->getArgs();
        if (!is_null($ID)) {
            $args['ID'] = $ID;
        }

        return new ResourceByProjectKeyTaxCategoriesKeyByKey($this->getUri().'/key={key}', $args, $this->getClient());
    }

    /**
     * @psalm-param scalar $ID
     *
     * @param null|mixed $ID
     */
    public function withId($ID = null): ResourceByProjectKeyTaxCategoriesByID
    {
        $args = $this->getArgs();
        if (!is_null($ID)) {
            $args['ID'] = $ID;
        }

        return new ResourceByProjectKeyTaxCategoriesByID($this->getUri().'/{ID}', $args, $this->getClient());
    }

    /**
     * @psalm-param ?object $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     *
     * @param null|mixed $body
     */
    public function get($body = null, array $headers = []): ByProjectKeyTaxCategoriesGet
    {
        $args = $this->getArgs();

        return new ByProjectKeyTaxCategoriesGet($args['projectKey'], $body, $headers, $this->getClient());
    }

    /**
     * @psalm-param ?TaxCategoryDraft $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function post(?TaxCategoryDraft $body = null, array $headers = []): ByProjectKeyTaxCategoriesPost
    {
        $args = $this->getArgs();

        return new ByProjectKeyTaxCategoriesPost($args['projectKey'], $body, $headers, $this->getClient());
    }
}
