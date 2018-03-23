<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Common;

use Commercetools\Base\JsonCollection;

class AssetSourceCollectionModel extends JsonCollection implements AssetSourceCollection {

    /**
     * @param AssetSource $value
     * @return AssetSourceCollection
     */
    public function add($value) {
        if (!$value instanceof AssetSource) {
            throw new \InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return AssetSource
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof AssetSource) {
            $data = $this->mapData(AssetSource::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}