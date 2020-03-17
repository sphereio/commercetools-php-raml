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
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyZonesByIDGet
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyZonesByIDPost
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyZonesByIDDelete
 * @covers \Commercetools\Api\Client\Resource\ResourceByProjectKeyZonesByID
 */
class ResourceByProjectKeyZonesByIDTest extends TestCase
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
            'ByProjectKeyZonesByIDGet_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->zones()
                        ->withId('ID')
                        ->get()
                        ->withExpand('expand');
                },
                'get',
                '{projectKey}/zones/{ID}?expand=expand',
            ],
            'ByProjectKeyZonesByIDGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->zones()
                        ->withId("ID")
                        ->get();
                },
                'get',
                '{projectKey}/zones/{ID}',
            ],
            'ByProjectKeyZonesByIDPost_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->zones()
                        ->withId('ID')
                        ->post(null)
                        ->withExpand('expand');
                },
                'post',
                '{projectKey}/zones/{ID}?expand=expand',
            ],
            'ByProjectKeyZonesByIDPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->zones()
                        ->withId("ID")
                        ->post(null);
                },
                'post',
                '{projectKey}/zones/{ID}',
            ],
            'ByProjectKeyZonesByIDDelete_withVersion' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->zones()
                        ->withId('ID')
                        ->delete()
                        ->withVersion('version');
                },
                'delete',
                '{projectKey}/zones/{ID}?version=version',
            ],
            'ByProjectKeyZonesByIDDelete_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->zones()
                        ->withId('ID')
                        ->delete()
                        ->withExpand('expand');
                },
                'delete',
                '{projectKey}/zones/{ID}?expand=expand',
            ],
            'ByProjectKeyZonesByIDDelete' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->zones()
                        ->withId("ID")
                        ->delete();
                },
                'delete',
                '{projectKey}/zones/{ID}',
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
            'ByProjectKeyZonesByIDGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->zones()
                        ->withId("ID")
                        ->get();
                }
            ],
            'ByProjectKeyZonesByIDPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->zones()
                        ->withId("ID")
                        ->post(null);
                }
            ],
            'ByProjectKeyZonesByIDDelete' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->zones()
                        ->withId("ID")
                        ->delete();
                }
            ]
        ];
    }

    public function getRequestBuilderResponses()
    {
        return [
            'ByProjectKeyZonesByIDGet_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->zones()
                        ->withId("ID")
                        ->get();
                },
                200
            ],
            'ByProjectKeyZonesByIDGet_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->zones()
                        ->withId("ID")
                        ->get();
                },
                400
            ],
            'ByProjectKeyZonesByIDGet_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->zones()
                        ->withId("ID")
                        ->get();
                },
                401
            ],
            'ByProjectKeyZonesByIDGet_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->zones()
                        ->withId("ID")
                        ->get();
                },
                403
            ],
            'ByProjectKeyZonesByIDGet_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->zones()
                        ->withId("ID")
                        ->get();
                },
                404
            ],
            'ByProjectKeyZonesByIDGet_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->zones()
                        ->withId("ID")
                        ->get();
                },
                500
            ],
            'ByProjectKeyZonesByIDGet_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->zones()
                        ->withId("ID")
                        ->get();
                },
                503
            ],
            'ByProjectKeyZonesByIDPost_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->zones()
                        ->withId("ID")
                        ->post(null);
                },
                200
            ],
            'ByProjectKeyZonesByIDPost_409' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->zones()
                        ->withId("ID")
                        ->post(null);
                },
                409
            ],
            'ByProjectKeyZonesByIDPost_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->zones()
                        ->withId("ID")
                        ->post(null);
                },
                400
            ],
            'ByProjectKeyZonesByIDPost_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->zones()
                        ->withId("ID")
                        ->post(null);
                },
                401
            ],
            'ByProjectKeyZonesByIDPost_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->zones()
                        ->withId("ID")
                        ->post(null);
                },
                403
            ],
            'ByProjectKeyZonesByIDPost_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->zones()
                        ->withId("ID")
                        ->post(null);
                },
                404
            ],
            'ByProjectKeyZonesByIDPost_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->zones()
                        ->withId("ID")
                        ->post(null);
                },
                500
            ],
            'ByProjectKeyZonesByIDPost_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->zones()
                        ->withId("ID")
                        ->post(null);
                },
                503
            ],
            'ByProjectKeyZonesByIDDelete_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->zones()
                        ->withId("ID")
                        ->delete();
                },
                200
            ],
            'ByProjectKeyZonesByIDDelete_409' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->zones()
                        ->withId("ID")
                        ->delete();
                },
                409
            ],
            'ByProjectKeyZonesByIDDelete_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->zones()
                        ->withId("ID")
                        ->delete();
                },
                400
            ],
            'ByProjectKeyZonesByIDDelete_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->zones()
                        ->withId("ID")
                        ->delete();
                },
                401
            ],
            'ByProjectKeyZonesByIDDelete_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->zones()
                        ->withId("ID")
                        ->delete();
                },
                403
            ],
            'ByProjectKeyZonesByIDDelete_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->zones()
                        ->withId("ID")
                        ->delete();
                },
                404
            ],
            'ByProjectKeyZonesByIDDelete_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->zones()
                        ->withId("ID")
                        ->delete();
                },
                500
            ],
            'ByProjectKeyZonesByIDDelete_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->zones()
                        ->withId("ID")
                        ->delete();
                },
                503
            ]
        ];
    }
}
