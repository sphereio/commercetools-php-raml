<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Request;

use Commercetools\Client\ApiRequest;
use Commercetools\Types\Inventory\InventoryEntry;

use Commercetools\Base\ResultMapper;
use Psr\Http\Message\ResponseInterface;
use Commercetools\Types\Inventory\InventoryEntryDraft;


class ByProjectKeyInventoryPost extends ApiRequest
{
    const RESULT_TYPE = InventoryEntry::class;

    /**
     * @param $projectKey
     * @param $body
     * @param array $headers
     */
    public function __construct($projectKey, InventoryEntryDraft $body, array $headers = [])
    {
        $uri = sprintf('/%s/inventory', $projectKey);
        parent::__construct('post', $uri, $headers, !is_null($body) ? json_encode($body) : null);
    }

    /**
     * @param ResponseInterface $response
     * @param ResultMapper $mapper
     * @return InventoryEntry
     */
    public function map(ResponseInterface $response, ResultMapper $mapper):  InventoryEntry
    {
        return parent::map($response, $mapper);
    }

    /**
     * @param $expand
     * @return ByProjectKeyInventoryPost
     */
    public function withExpand($expand): ByProjectKeyInventoryPost
    {
        return $this->withQueryParam('expand', $expand);
    }

}