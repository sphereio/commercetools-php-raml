<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Test\Client\Resource;

use Commercetools\Api\Client\ApiRequestBuilder;
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
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyOrdersByIDGet
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyOrdersByIDPost
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyOrdersByIDDelete
 * @covers \Commercetools\Api\Client\Resource\ResourceByProjectKeyOrdersByID
 */
class ResourceByProjectKeyOrdersByIDTest extends TestCase
{
    /**
     * @dataProvider getRequests()
     */
    public function testBuilder(callable $builderFunction, string $method, string $relativeUri, string $body = null)
    {
        $builder = new ApiRequestBuilder();
        $request = $builderFunction($builder);
        $this->assertSame(strtolower($method), strtolower($request->getMethod()));
        $this->assertSame($relativeUri, (string) $request->getUri());
        if (!is_null($body)) {
            $this->assertJsonStringEqualsJsonString($body, (string) $request->getBody());
        } else {
            $this->assertSame("", (string) $request->getBody());
        }
    }

    /**
     * @dataProvider getResources()
     */
    public function testResources(callable $builderFunction, string $class, array $expectedArgs)
    {
        $builder = new ApiRequestBuilder();
        $resource = $builderFunction($builder);
        $this->assertInstanceOf($class, $resource);
        $this->assertEquals($expectedArgs, $resource->getArgs());
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
            'ByProjectKeyOrdersByIDGet_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->orders()
                        ->withId('test_ID')
                        ->get()
                        ->withExpand('expand');
                },
                'get',
                'test_projectKey/orders/test_ID?expand=expand',
            ],
            'ByProjectKeyOrdersByIDGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->orders()
                        ->withId("test_ID")
                        ->get();
                },
                'get',
                'test_projectKey/orders/test_ID',
            ],
            'ByProjectKeyOrdersByIDPost_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->orders()
                        ->withId('test_ID')
                        ->post(null)
                        ->withExpand('expand');
                },
                'post',
                'test_projectKey/orders/test_ID?expand=expand',
            ],
            'ByProjectKeyOrdersByIDPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->orders()
                        ->withId("test_ID")
                        ->post(null);
                },
                'post',
                'test_projectKey/orders/test_ID',
            ],
            'ByProjectKeyOrdersByIDDelete_withDataErasure' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->orders()
                        ->withId('test_ID')
                        ->delete()
                        ->withDataErasure('dataErasure');
                },
                'delete',
                'test_projectKey/orders/test_ID?dataErasure=dataErasure',
            ],
            'ByProjectKeyOrdersByIDDelete_withVersion' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->orders()
                        ->withId('test_ID')
                        ->delete()
                        ->withVersion('version');
                },
                'delete',
                'test_projectKey/orders/test_ID?version=version',
            ],
            'ByProjectKeyOrdersByIDDelete_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->orders()
                        ->withId('test_ID')
                        ->delete()
                        ->withExpand('expand');
                },
                'delete',
                'test_projectKey/orders/test_ID?expand=expand',
            ],
            'ByProjectKeyOrdersByIDDelete' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->orders()
                        ->withId("test_ID")
                        ->delete();
                },
                'delete',
                'test_projectKey/orders/test_ID',
            ]
        ];
    }

    public function getResources()
    {
        return [
        ];
    }

    public function getRequestBuilders()
    {
        return [
            'ByProjectKeyOrdersByIDGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->orders()
                        ->withId("ID")
                        ->get();
                }
            ],
            'ByProjectKeyOrdersByIDPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->orders()
                        ->withId("ID")
                        ->post(null);
                }
            ],
            'ByProjectKeyOrdersByIDDelete' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->orders()
                        ->withId("ID")
                        ->delete();
                }
            ]
        ];
    }

    public function getRequestBuilderResponses()
    {
        return [
            'ByProjectKeyOrdersByIDGet_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->orders()
                        ->withId("ID")
                        ->get();
                },
                200
            ],
            'ByProjectKeyOrdersByIDGet_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->orders()
                        ->withId("ID")
                        ->get();
                },
                400
            ],
            'ByProjectKeyOrdersByIDGet_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->orders()
                        ->withId("ID")
                        ->get();
                },
                401
            ],
            'ByProjectKeyOrdersByIDGet_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->orders()
                        ->withId("ID")
                        ->get();
                },
                403
            ],
            'ByProjectKeyOrdersByIDGet_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->orders()
                        ->withId("ID")
                        ->get();
                },
                404
            ],
            'ByProjectKeyOrdersByIDGet_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->orders()
                        ->withId("ID")
                        ->get();
                },
                500
            ],
            'ByProjectKeyOrdersByIDGet_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->orders()
                        ->withId("ID")
                        ->get();
                },
                503
            ],
            'ByProjectKeyOrdersByIDGet_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->orders()
                        ->withId("ID")
                        ->get();
                },
                599
            ],
            'ByProjectKeyOrdersByIDPost_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->orders()
                        ->withId("ID")
                        ->post(null);
                },
                200
            ],
            'ByProjectKeyOrdersByIDPost_409' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->orders()
                        ->withId("ID")
                        ->post(null);
                },
                409
            ],
            'ByProjectKeyOrdersByIDPost_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->orders()
                        ->withId("ID")
                        ->post(null);
                },
                400
            ],
            'ByProjectKeyOrdersByIDPost_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->orders()
                        ->withId("ID")
                        ->post(null);
                },
                401
            ],
            'ByProjectKeyOrdersByIDPost_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->orders()
                        ->withId("ID")
                        ->post(null);
                },
                403
            ],
            'ByProjectKeyOrdersByIDPost_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->orders()
                        ->withId("ID")
                        ->post(null);
                },
                404
            ],
            'ByProjectKeyOrdersByIDPost_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->orders()
                        ->withId("ID")
                        ->post(null);
                },
                500
            ],
            'ByProjectKeyOrdersByIDPost_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->orders()
                        ->withId("ID")
                        ->post(null);
                },
                503
            ],
            'ByProjectKeyOrdersByIDPost_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->orders()
                        ->withId("ID")
                        ->post(null);
                },
                599
            ],
            'ByProjectKeyOrdersByIDDelete_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->orders()
                        ->withId("ID")
                        ->delete();
                },
                200
            ],
            'ByProjectKeyOrdersByIDDelete_409' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->orders()
                        ->withId("ID")
                        ->delete();
                },
                409
            ],
            'ByProjectKeyOrdersByIDDelete_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->orders()
                        ->withId("ID")
                        ->delete();
                },
                400
            ],
            'ByProjectKeyOrdersByIDDelete_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->orders()
                        ->withId("ID")
                        ->delete();
                },
                401
            ],
            'ByProjectKeyOrdersByIDDelete_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->orders()
                        ->withId("ID")
                        ->delete();
                },
                403
            ],
            'ByProjectKeyOrdersByIDDelete_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->orders()
                        ->withId("ID")
                        ->delete();
                },
                404
            ],
            'ByProjectKeyOrdersByIDDelete_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->orders()
                        ->withId("ID")
                        ->delete();
                },
                500
            ],
            'ByProjectKeyOrdersByIDDelete_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->orders()
                        ->withId("ID")
                        ->delete();
                },
                503
            ],
            'ByProjectKeyOrdersByIDDelete_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->orders()
                        ->withId("ID")
                        ->delete();
                },
                599
            ]
        ];
    }
}
