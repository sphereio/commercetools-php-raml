<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Request;

use Commercetools\Client\Resource;
use Commercetools\Types\Customer\CustomerResetPassword;


class Resource17 extends Resource
{
    /**
     * @param CustomerResetPassword $body
     * @return ByProjectKeyCustomersPasswordResetPost
     */
    public function post(CustomerResetPassword $body): ByProjectKeyCustomersPasswordResetPost {
        $args = $this->getArgs();
        return new ByProjectKeyCustomersPasswordResetPost($args['projectKey'], $body);
    }

}