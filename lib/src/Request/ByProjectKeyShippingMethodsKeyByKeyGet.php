<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Request;

use Commercetools\Client\ApiRequest;
use Commercetools\Types\ShippingMethod\ShippingMethod;

use Commercetools\Base\ResultMapper;
use Psr\Http\Message\ResponseInterface;

class ByProjectKeyShippingMethodsKeyByKeyGet extends ApiRequest
{
    const RESULT_TYPE = ShippingMethod::class;

    /**
     * @param $projectKey
     * @param $key
     * @param $body
     * @param array $headers
     */
    public function __construct($projectKey, $key, $body = null, array $headers = [])
    {
        $uri = sprintf('/%s/shipping-methods/key=%s', $projectKey, $key);
        parent::__construct('get', $uri, $headers, !is_null($body) ? json_encode($body) : null);
    }

    /**
     * @param ResponseInterface $response
     * @param ResultMapper $mapper
     * @return ShippingMethod
     */
    public function map(ResponseInterface $response, ResultMapper $mapper):  ShippingMethod
    {
        return parent::map($response, $mapper);
    }

    /**
     * @param $expand
     * @return ByProjectKeyShippingMethodsKeyByKeyGet
     */
    public function withExpand($expand): ByProjectKeyShippingMethodsKeyByKeyGet
    {
        return $this->withQueryParam('expand', $expand);
    }

}