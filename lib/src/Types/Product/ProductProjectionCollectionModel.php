<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

use Commercetools\Base\JsonCollection;

class ProductProjectionCollectionModel extends JsonCollection implements ProductProjectionCollection {

    /**
     * @param ProductProjection $value
     * @return ProductProjectionCollection
     */
    public function add($value) {
        if (!$value instanceof ProductProjection) {
            throw new \InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ProductProjection
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ProductProjection) {
            $data = $this->mapData(ProductProjection::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }

    protected function index($data)
    {
        foreach ($data as $key => $value) {
            if (isset($value['id'])) {
                $this->addToIndex('id', $value['id'], $key);
            }
        }
    }

    /**
     * @return string
     */
    public function byId($id)
    {
        return $this->valueByKey('id', $id);
    }
}