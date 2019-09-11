<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Test\Client\Resource;

use PHPUnit\Framework\TestCase;
use Commercetools\Api\Client\ApiRoot;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyCustomObjectsByContainerByKey;
use Psr\Http\Message\RequestInterface;

class ResourceByProjectKeyCustomObjectsByContainerByKeyTest extends TestCase
{
    public function getRequests()
    {
        return [
           'ByProjectKeyCustomObjectsByContainerByKeyGet_withExpand' => [
               function(ApiRoot $builder): RequestInterface {
                   return $builder
                       ->withProjectKey("projectKey")
                       ->customObjects()
                       ->withContainerAndKey("container", "key")
                       ->get()
                       ->withExpand('expand');
               },
               'get',
               '/{projectKey}/custom-objects/{container}/{key}?expand=expand',
           ],
           'ByProjectKeyCustomObjectsByContainerByKeyGet' => [
               function(ApiRoot $builder): RequestInterface {
                   return $builder
                       ->withProjectKey("projectKey")
                       ->customObjects()
                       ->withContainerAndKey("container", "key")
                       ->get();
               },
               'get',
               '/{projectKey}/custom-objects/{container}/{key}',
           ],
           'ByProjectKeyCustomObjectsByContainerByKeyDelete_withVersion' => [
               function(ApiRoot $builder): RequestInterface {
                   return $builder
                       ->withProjectKey("projectKey")
                       ->customObjects()
                       ->withContainerAndKey("container", "key")
                       ->delete()
                       ->withVersion('version');
               },
               'delete',
               '/{projectKey}/custom-objects/{container}/{key}?version=version',
           ],
           'ByProjectKeyCustomObjectsByContainerByKeyDelete_withDataErasure' => [
               function(ApiRoot $builder): RequestInterface {
                   return $builder
                       ->withProjectKey("projectKey")
                       ->customObjects()
                       ->withContainerAndKey("container", "key")
                       ->delete()
                       ->withDataErasure('dataErasure');
               },
               'delete',
               '/{projectKey}/custom-objects/{container}/{key}?dataErasure=dataErasure',
           ],
           'ByProjectKeyCustomObjectsByContainerByKeyDelete_withExpand' => [
               function(ApiRoot $builder): RequestInterface {
                   return $builder
                       ->withProjectKey("projectKey")
                       ->customObjects()
                       ->withContainerAndKey("container", "key")
                       ->delete()
                       ->withExpand('expand');
               },
               'delete',
               '/{projectKey}/custom-objects/{container}/{key}?expand=expand',
           ],
           'ByProjectKeyCustomObjectsByContainerByKeyDelete' => [
               function(ApiRoot $builder): RequestInterface {
                   return $builder
                       ->withProjectKey("projectKey")
                       ->customObjects()
                       ->withContainerAndKey("container", "key")
                       ->delete();
               },
               'delete',
               '/{projectKey}/custom-objects/{container}/{key}',
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