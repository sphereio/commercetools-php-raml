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
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyShippingMethodsKeyByKeyGet
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyShippingMethodsKeyByKeyPost
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyShippingMethodsKeyByKeyDelete
 * @covers \Commercetools\Api\Client\Resource\ResourceByProjectKeyShippingMethodsKeyByKey
 */
class ResourceByProjectKeyShippingMethodsKeyByKeyTest extends TestCase
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
            'ByProjectKeyShippingMethodsKeyByKeyGet_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->shippingMethods()
                        ->withKey('key')
                        ->get()
                        ->withExpand('expand');
                },
                'get',
                '{projectKey}/shipping-methods/key={key}?expand=expand',
            ],
            'ByProjectKeyShippingMethodsKeyByKeyGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->shippingMethods()
                        ->withKey("key")
                        ->get();
                },
                'get',
                '{projectKey}/shipping-methods/key={key}',
            ],
            'ByProjectKeyShippingMethodsKeyByKeyPost_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->shippingMethods()
                        ->withKey('key')
                        ->post(null)
                        ->withExpand('expand');
                },
                'post',
                '{projectKey}/shipping-methods/key={key}?expand=expand',
            ],
            'ByProjectKeyShippingMethodsKeyByKeyPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->shippingMethods()
                        ->withKey("key")
                        ->post(null);
                },
                'post',
                '{projectKey}/shipping-methods/key={key}',
            ],
            'ByProjectKeyShippingMethodsKeyByKeyDelete_withVersion' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->shippingMethods()
                        ->withKey('key')
                        ->delete()
                        ->withVersion('version');
                },
                'delete',
                '{projectKey}/shipping-methods/key={key}?version=version',
            ],
            'ByProjectKeyShippingMethodsKeyByKeyDelete_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->shippingMethods()
                        ->withKey('key')
                        ->delete()
                        ->withExpand('expand');
                },
                'delete',
                '{projectKey}/shipping-methods/key={key}?expand=expand',
            ],
            'ByProjectKeyShippingMethodsKeyByKeyDelete' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->shippingMethods()
                        ->withKey("key")
                        ->delete();
                },
                'delete',
                '{projectKey}/shipping-methods/key={key}',
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
            'ByProjectKeyShippingMethodsKeyByKeyGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->shippingMethods()
                        ->withKey("key")
                        ->get();
                }
            ],
            'ByProjectKeyShippingMethodsKeyByKeyPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->shippingMethods()
                        ->withKey("key")
                        ->post(null);
                }
            ],
            'ByProjectKeyShippingMethodsKeyByKeyDelete' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->shippingMethods()
                        ->withKey("key")
                        ->delete();
                }
            ]
        ];
    }

    public function getRequestBuilderResponses()
    {
        return [
            'ByProjectKeyShippingMethodsKeyByKeyGet_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->shippingMethods()
                        ->withKey("key")
                        ->get();
                },
                200
            ],
            'ByProjectKeyShippingMethodsKeyByKeyGet_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->shippingMethods()
                        ->withKey("key")
                        ->get();
                },
                400
            ],
            'ByProjectKeyShippingMethodsKeyByKeyGet_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->shippingMethods()
                        ->withKey("key")
                        ->get();
                },
                401
            ],
            'ByProjectKeyShippingMethodsKeyByKeyGet_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->shippingMethods()
                        ->withKey("key")
                        ->get();
                },
                403
            ],
            'ByProjectKeyShippingMethodsKeyByKeyGet_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->shippingMethods()
                        ->withKey("key")
                        ->get();
                },
                404
            ],
            'ByProjectKeyShippingMethodsKeyByKeyGet_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->shippingMethods()
                        ->withKey("key")
                        ->get();
                },
                500
            ],
            'ByProjectKeyShippingMethodsKeyByKeyGet_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->shippingMethods()
                        ->withKey("key")
                        ->get();
                },
                503
            ],
            'ByProjectKeyShippingMethodsKeyByKeyPost_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->shippingMethods()
                        ->withKey("key")
                        ->post(null);
                },
                200
            ],
            'ByProjectKeyShippingMethodsKeyByKeyPost_409' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->shippingMethods()
                        ->withKey("key")
                        ->post(null);
                },
                409
            ],
            'ByProjectKeyShippingMethodsKeyByKeyPost_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->shippingMethods()
                        ->withKey("key")
                        ->post(null);
                },
                400
            ],
            'ByProjectKeyShippingMethodsKeyByKeyPost_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->shippingMethods()
                        ->withKey("key")
                        ->post(null);
                },
                401
            ],
            'ByProjectKeyShippingMethodsKeyByKeyPost_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->shippingMethods()
                        ->withKey("key")
                        ->post(null);
                },
                403
            ],
            'ByProjectKeyShippingMethodsKeyByKeyPost_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->shippingMethods()
                        ->withKey("key")
                        ->post(null);
                },
                404
            ],
            'ByProjectKeyShippingMethodsKeyByKeyPost_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->shippingMethods()
                        ->withKey("key")
                        ->post(null);
                },
                500
            ],
            'ByProjectKeyShippingMethodsKeyByKeyPost_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->shippingMethods()
                        ->withKey("key")
                        ->post(null);
                },
                503
            ],
            'ByProjectKeyShippingMethodsKeyByKeyDelete_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->shippingMethods()
                        ->withKey("key")
                        ->delete();
                },
                200
            ],
            'ByProjectKeyShippingMethodsKeyByKeyDelete_409' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->shippingMethods()
                        ->withKey("key")
                        ->delete();
                },
                409
            ],
            'ByProjectKeyShippingMethodsKeyByKeyDelete_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->shippingMethods()
                        ->withKey("key")
                        ->delete();
                },
                400
            ],
            'ByProjectKeyShippingMethodsKeyByKeyDelete_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->shippingMethods()
                        ->withKey("key")
                        ->delete();
                },
                401
            ],
            'ByProjectKeyShippingMethodsKeyByKeyDelete_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->shippingMethods()
                        ->withKey("key")
                        ->delete();
                },
                403
            ],
            'ByProjectKeyShippingMethodsKeyByKeyDelete_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->shippingMethods()
                        ->withKey("key")
                        ->delete();
                },
                404
            ],
            'ByProjectKeyShippingMethodsKeyByKeyDelete_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->shippingMethods()
                        ->withKey("key")
                        ->delete();
                },
                500
            ],
            'ByProjectKeyShippingMethodsKeyByKeyDelete_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->shippingMethods()
                        ->withKey("key")
                        ->delete();
                },
                503
            ]
        ];
    }
}
