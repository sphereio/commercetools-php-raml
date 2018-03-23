<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Request;

use Commercetools\Client\Resource;
use Commercetools\Psr\Http\Message\UploadedFileInterface;


class Resource44 extends Resource
{
    /**
     * @param UploadedFileInterface $body
     * @return ByProjectKeyProductsByIDImagesPost
     */
    public function post(UploadedFileInterface $body): ByProjectKeyProductsByIDImagesPost {
        $args = $this->getArgs();
        return new ByProjectKeyProductsByIDImagesPost($args['projectKey'], $args['ID'], $body);
    }

}