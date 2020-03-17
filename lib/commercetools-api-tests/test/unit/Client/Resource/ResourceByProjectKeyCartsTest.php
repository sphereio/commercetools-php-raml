<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Test\Client\Resource;

use Commercetools\Api\Client\ApiRequestBuilder;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyCartsByID;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyCartsCustomerIdByCustomerId;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyCartsReplicate;
use Commercetools\Base\JsonObject;
use Commercetools\Client\ApiRequest;
use Commercetools\Exception\ApiClientException;
use Commercetools\Exception\ApiServerException;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\ServerException;
use GuzzleHttp\Psr7\Response;
use PHPUnit\Framework\TestCase;
use Prophecy\Argument;
use Psr\Http\Message\RequestInterface;

/**
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyCartsGet
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyCartsPost
 * @covers \Commercetools\Api\Client\Resource\ResourceByProjectKeyCarts
 */
class ResourceByProjectKeyCartsTest extends TestCase
{
    /**
     * @dataProvider getRequests()
     */
    public function testBuilder(callable $builderFunction, string $method, string $relativeUri, string $body = null)
    {
        $builder = new ApiRequestBuilder();
        $request = $builderFunction($builder);
        $this->assertSame(strtolower($method), strtolower($request->getMethod()));
        $this->assertStringContainsString(str_replace(['{', '}'], '', $relativeUri), (string) $request->getUri());
        if (!is_null($body)) {
            $this->assertJsonStringEqualsJsonString($body, (string) $request->getBody());
        };
    }

    /**
     * @dataProvider getResources()
     */
    public function testResources(callable $builderFunction, string $class)
    {
        $builder = new ApiRequestBuilder();
        $this->assertInstanceOf($class, $builderFunction($builder));
    }

    /**
     * @dataProvider getRequestBuilderResponses()
     */
    public function testMapFromResponse(callable $builderFunction, $statusCode)
    {
        $builder = new ApiRequestBuilder();
        $request = $builderFunction($builder);
        $this->assertInstanceOf(ApiRequest::class, $request);

        $response = new Response($statusCode, [], "{}");
        $this->assertInstanceOf(JsonObject::class, $request->mapFromResponse($response));
    }

    /**
     * @dataProvider getRequestBuilders()
     */
    public function testExecuteClientException(callable $builderFunction)
    {
        $client = $this->prophesize(ClientInterface::class);
        $client->send(Argument::any(), Argument::any())->willThrow(ClientException::class);

        $builder = new ApiRequestBuilder($client->reveal());
        $request = $builderFunction($builder);
        $this->expectException(ApiClientException::class);
        $request->execute();
    }

    /**
     * @dataProvider getRequestBuilders()
     */
    public function testExecuteServerException(callable $builderFunction)
    {
        $client = $this->prophesize(ClientInterface::class);
        $client->send(Argument::any(), Argument::any())->willThrow(ServerException::class);

        $builder = new ApiRequestBuilder($client->reveal());
        $request = $builderFunction($builder);
        $this->expectException(ApiServerException::class);
        $request->execute();
    }

    public function getRequests()
    {
        return [
            'ByProjectKeyCartsGet_withCustomerId' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->carts()
                        ->get()
                        ->withCustomerId('customerId');
                },
                'get',
                '{projectKey}/carts?customerId=customerId',
            ],
            'ByProjectKeyCartsGet_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->carts()
                        ->get()
                        ->withExpand('expand');
                },
                'get',
                '{projectKey}/carts?expand=expand',
            ],
            'ByProjectKeyCartsGet_withSort' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->carts()
                        ->get()
                        ->withSort('sort');
                },
                'get',
                '{projectKey}/carts?sort=sort',
            ],
            'ByProjectKeyCartsGet_withLimit' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->carts()
                        ->get()
                        ->withLimit('limit');
                },
                'get',
                '{projectKey}/carts?limit=limit',
            ],
            'ByProjectKeyCartsGet_withOffset' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->carts()
                        ->get()
                        ->withOffset('offset');
                },
                'get',
                '{projectKey}/carts?offset=offset',
            ],
            'ByProjectKeyCartsGet_withWithTotal' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->carts()
                        ->get()
                        ->withWithTotal('withTotal');
                },
                'get',
                '{projectKey}/carts?withTotal=withTotal',
            ],
            'ByProjectKeyCartsGet_withWhere' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->carts()
                        ->get()
                        ->withWhere('where');
                },
                'get',
                '{projectKey}/carts?where=where',
            ],
            'ByProjectKeyCartsGet_withPredicateVar' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->carts()
                        ->get()
                        ->withPredicateVar('varName', 'var.varName');
                },
                'get',
                '{projectKey}/carts?var.varName=var.varName',
            ],
            'ByProjectKeyCartsGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->carts()
                        ->get();
                },
                'get',
                '{projectKey}/carts',
            ],
            'ByProjectKeyCartsPost_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->carts()
                        ->post(null)
                        ->withExpand('expand');
                },
                'post',
                '{projectKey}/carts?expand=expand',
            ],
            'ByProjectKeyCartsPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->carts()
                        ->post(null);
                },
                'post',
                '{projectKey}/carts',
            ]
        ];
    }

    public function getResources()
    {
        return [
            'ResourceByProjectKeyCartsReplicate' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyCartsReplicate {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->carts()
                        ->replicate();
                },
                ResourceByProjectKeyCartsReplicate::class
            ],
            'ResourceByProjectKeyCartsCustomerIdByCustomerId' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyCartsCustomerIdByCustomerId {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->carts()
                        ->withCustomerId("customerId");
                },
                ResourceByProjectKeyCartsCustomerIdByCustomerId::class
            ],
            'ResourceByProjectKeyCartsByID' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyCartsByID {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->carts()
                        ->withId("ID");
                },
                ResourceByProjectKeyCartsByID::class
            ]
        ];
    }

    public function getRequestBuilders()
    {
        return [
            'ByProjectKeyCartsGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->carts()
                        ->get();
                }
            ],
            'ByProjectKeyCartsPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->carts()
                        ->post(null);
                }
            ]
        ];
    }

    public function getRequestBuilderResponses()
    {
        return [
            'ByProjectKeyCartsGet_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->carts()
                        ->get();
                },
                200
            ],
            'ByProjectKeyCartsGet_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->carts()
                        ->get();
                },
                400
            ],
            'ByProjectKeyCartsGet_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->carts()
                        ->get();
                },
                401
            ],
            'ByProjectKeyCartsGet_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->carts()
                        ->get();
                },
                403
            ],
            'ByProjectKeyCartsGet_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->carts()
                        ->get();
                },
                404
            ],
            'ByProjectKeyCartsGet_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->carts()
                        ->get();
                },
                500
            ],
            'ByProjectKeyCartsGet_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->carts()
                        ->get();
                },
                503
            ],
            'ByProjectKeyCartsPost_201' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->carts()
                        ->post(null);
                },
                201
            ],
            'ByProjectKeyCartsPost_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->carts()
                        ->post(null);
                },
                400
            ],
            'ByProjectKeyCartsPost_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->carts()
                        ->post(null);
                },
                401
            ],
            'ByProjectKeyCartsPost_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->carts()
                        ->post(null);
                },
                403
            ],
            'ByProjectKeyCartsPost_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->carts()
                        ->post(null);
                },
                404
            ],
            'ByProjectKeyCartsPost_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->carts()
                        ->post(null);
                },
                500
            ],
            'ByProjectKeyCartsPost_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->carts()
                        ->post(null);
                },
                503
            ],
            'ByProjectKeyCartsPost_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->carts()
                        ->post(null);
                },
                200
            ]
        ];
    }
}
