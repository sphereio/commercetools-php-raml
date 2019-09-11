<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Test\Client\Resource;

use PHPUnit\Framework\TestCase;
use Commercetools\Api\Client\ApiRoot;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyProductProjections;
use Psr\Http\Message\RequestInterface;

class ResourceByProjectKeyProductProjectionsTest extends TestCase
{
    public function getRequests()
    {
        return [
           'ByProjectKeyProductProjectionsGet_withStaged' => [
               function(ApiRoot $builder): RequestInterface {
                   return $builder
                       ->withProjectKey("projectKey")
                       ->productProjections()
                       ->get()
                       ->withStaged('staged');
               },
               'get',
               '/{projectKey}/product-projections?staged=staged',
           ],
           'ByProjectKeyProductProjectionsGet_withPriceCurrency' => [
               function(ApiRoot $builder): RequestInterface {
                   return $builder
                       ->withProjectKey("projectKey")
                       ->productProjections()
                       ->get()
                       ->withPriceCurrency('priceCurrency');
               },
               'get',
               '/{projectKey}/product-projections?priceCurrency=priceCurrency',
           ],
           'ByProjectKeyProductProjectionsGet_withPriceCountry' => [
               function(ApiRoot $builder): RequestInterface {
                   return $builder
                       ->withProjectKey("projectKey")
                       ->productProjections()
                       ->get()
                       ->withPriceCountry('priceCountry');
               },
               'get',
               '/{projectKey}/product-projections?priceCountry=priceCountry',
           ],
           'ByProjectKeyProductProjectionsGet_withPriceCustomerGroup' => [
               function(ApiRoot $builder): RequestInterface {
                   return $builder
                       ->withProjectKey("projectKey")
                       ->productProjections()
                       ->get()
                       ->withPriceCustomerGroup('priceCustomerGroup');
               },
               'get',
               '/{projectKey}/product-projections?priceCustomerGroup=priceCustomerGroup',
           ],
           'ByProjectKeyProductProjectionsGet_withPriceChannel' => [
               function(ApiRoot $builder): RequestInterface {
                   return $builder
                       ->withProjectKey("projectKey")
                       ->productProjections()
                       ->get()
                       ->withPriceChannel('priceChannel');
               },
               'get',
               '/{projectKey}/product-projections?priceChannel=priceChannel',
           ],
           'ByProjectKeyProductProjectionsGet_withExpand' => [
               function(ApiRoot $builder): RequestInterface {
                   return $builder
                       ->withProjectKey("projectKey")
                       ->productProjections()
                       ->get()
                       ->withExpand('expand');
               },
               'get',
               '/{projectKey}/product-projections?expand=expand',
           ],
           'ByProjectKeyProductProjectionsGet_withWhere' => [
               function(ApiRoot $builder): RequestInterface {
                   return $builder
                       ->withProjectKey("projectKey")
                       ->productProjections()
                       ->get()
                       ->withWhere('where');
               },
               'get',
               '/{projectKey}/product-projections?where=where',
           ],
           'ByProjectKeyProductProjectionsGet_withSort' => [
               function(ApiRoot $builder): RequestInterface {
                   return $builder
                       ->withProjectKey("projectKey")
                       ->productProjections()
                       ->get()
                       ->withSort('sort');
               },
               'get',
               '/{projectKey}/product-projections?sort=sort',
           ],
           'ByProjectKeyProductProjectionsGet_withLimit' => [
               function(ApiRoot $builder): RequestInterface {
                   return $builder
                       ->withProjectKey("projectKey")
                       ->productProjections()
                       ->get()
                       ->withLimit('limit');
               },
               'get',
               '/{projectKey}/product-projections?limit=limit',
           ],
           'ByProjectKeyProductProjectionsGet_withOffset' => [
               function(ApiRoot $builder): RequestInterface {
                   return $builder
                       ->withProjectKey("projectKey")
                       ->productProjections()
                       ->get()
                       ->withOffset('offset');
               },
               'get',
               '/{projectKey}/product-projections?offset=offset',
           ],
           'ByProjectKeyProductProjectionsGet_withWithTotal' => [
               function(ApiRoot $builder): RequestInterface {
                   return $builder
                       ->withProjectKey("projectKey")
                       ->productProjections()
                       ->get()
                       ->withWithTotal('withTotal');
               },
               'get',
               '/{projectKey}/product-projections?withTotal=withTotal',
           ],
           'ByProjectKeyProductProjectionsGet' => [
               function(ApiRoot $builder): RequestInterface {
                   return $builder
                       ->withProjectKey("projectKey")
                       ->productProjections()
                       ->get();
               },
               'get',
               '/{projectKey}/product-projections',
           ]
        ];
    }
    
    /**
     * @dataProvider getRequests()
     */
    public function testBuilder(callable $builderFunction, string $method, string $relativeUri, string $body = null)
    {
        $builder = new ApiRoot();
        $request = $builderFunction($builder);
        $this->assertSame(strtolower($method), strtolower($request->getMethod()));
        $this->assertStringContainsString(str_replace(['{', '}'], '', $relativeUri), (string)$request->getUri());
        if (!is_null($body)) {
            $this->assertJsonStringEqualsJsonString($body, (string)$request->getBody());
        };
    }
}