<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

use Commercetools\Base\JsonObjectModel;

class ProductVariantChannelAvailabilityMapModel extends JsonObjectModel implements ProductVariantChannelAvailabilityMap {
    private $patternData = [];
    /**
     * @param string $key
     * @return mixed
     */
    public function get(string $key)
    {
        if(!isset($this->patternData[$key])) {
            switch (true) {
                case preg_match('//', $key):
                    $value = $this->raw($key);
                    if (is_null($value)) {
                        return $this->mapData(ProductVariantChannelAvailability::class, null);
                    }
                    $value = $this->mapData(ProductVariantChannelAvailability::class, $value);

                    break;
                default:
                    throw new \InvalidArgumentException();
            }
            $this->patternData[$key] = $value;
        }
        return $this->patternData[$key];
    }

    /**
     * @param string $key
     * @param mixed $value
     * @return $this
     */
    public function set(string $key, $value)
    {
        if (!$this->validKey($key)) {
            throw new \InvalidArgumentException();
        }
        $this->patternData[$key] = $value;
        return $this;
    }


    private function validKey(string $key): bool
    {
        switch (true) {
            case preg_match('//', $key):
                return true;
            default:
                return false;
        }
    }

    /**
     * @inheritdoc
     */
    protected function toArray(): array
    {
        $data = parent::toArray();
        $data = array_merge($data, $this->patternData);
        unset($data['patternData']);
        return $data;
    }
}