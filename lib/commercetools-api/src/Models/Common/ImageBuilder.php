<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Common;

use Commercetools\Base\Builder;

/**
 * @implements Builder<Image>
 */
final class ImageBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $label;

    /**
     * @var ?string
     */
    private $url;

    /**
     * @var ImageDimensions|?ImageDimensionsBuilder
     */
    private $dimensions;

    public function __construct()
    {
    }

    /**
     * @return null|string
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * @return null|string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @return null|ImageDimensions
     */
    public function getDimensions()
    {
        return $this->dimensions instanceof ImageDimensionsBuilder ? $this->dimensions->build() : $this->dimensions;
    }

    /**
     * @return $this
     */
    public function withLabel(?string $label)
    {
        $this->label = $label;

        return $this;
    }

    /**
     * @return $this
     */
    public function withUrl(?string $url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * @return $this
     */
    public function withDimensions(?ImageDimensions $dimensions)
    {
        $this->dimensions = $dimensions;

        return $this;
    }

    /**
     * @return $this
     */
    public function withDimensionsBuilder(?ImageDimensionsBuilder $dimensions)
    {
        $this->dimensions = $dimensions;

        return $this;
    }

    public function build(): Image
    {
        return new ImageModel(
            $this->label,
            $this->url,
            ($this->dimensions instanceof ImageDimensionsBuilder ? $this->dimensions->build() : $this->dimensions)
        );
    }

    public static function of(): ImageBuilder
    {
        return new self();
    }
}