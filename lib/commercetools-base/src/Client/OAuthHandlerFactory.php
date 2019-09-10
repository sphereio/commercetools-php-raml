<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Client;

use Cache\Adapter\Filesystem\FilesystemCachePool;
use Commercetools\Exception\InvalidArgumentException;
use GuzzleHttp\Client;
use League\Flysystem\Adapter\Local;
use League\Flysystem\Filesystem;
use Psr\Cache\CacheItemPoolInterface;
use Psr\SimpleCache\CacheInterface;

class OAuthHandlerFactory
{
    /**
     * @psalm-param CacheItemPoolInterface|CacheInterface|null $cache
     *
     * @param null|mixed $cache
     */
    public static function ofAuthConfig(AuthConfig $authConfig, $cache = null): OAuth2Handler
    {
        $cache = self::validateCache($cache);
        switch (true) {
           case $authConfig instanceof ClientCredentialsConfig:
               $provider = new CachedTokenProvider(
                   new ClientCredentialTokenProvider(
                       new Client($authConfig->getClientOptions()),
                       $authConfig
                   ),
                   $cache,
                   $authConfig->getCacheKey()
               );

               break;
           default:
               throw new InvalidArgumentException('Unknown authorization configuration');
        }

        return self::ofProvider($provider);
    }

    public static function ofProvider(TokenProvider $provider): OAuth2Handler
    {
        return new OAuth2Handler($provider);
    }

    /**
     * @psalm-param CacheItemPoolInterface|CacheInterface|null $cache
     * @psalm-return CacheItemPoolInterface|CacheInterface
     *
     * @param null|mixed $cache
     */
    private static function validateCache($cache = null)
    {
        if ($cache instanceof CacheItemPoolInterface || $cache instanceof CacheInterface) {
            return $cache;
        }

        $filesystemAdapter = new Local(getcwd());
        $filesystem = new Filesystem($filesystemAdapter);

        return new FilesystemCachePool($filesystem);
    }
}
