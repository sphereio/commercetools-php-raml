<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Common;

use Commercetools\Base\JsonObjectModel;
use stdClass;

final class ImageModel extends JsonObjectModel implements Image
{
    /**
     * @var ?string
     */
    protected $label;

    /**
     * @var ?string
     */
    protected $url;

    /**
     * @var ?ImageDimensions
     */
    protected $dimensions;

    public function __construct(
        string $label = null,
        string $url = null,
        ImageDimensions $dimensions = null
    ) {
        $this->label = $label;
        $this->url = $url;
        $this->dimensions = $dimensions;
    }

    /**
     * @return null|string
     */
    public function getLabel()
    {
        if (is_null($this->label)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(Image::FIELD_LABEL);
            if (is_null($data)) {
                return null;
            }
            $this->label = (string) $data;
        }

        return $this->label;
    }

    /**
     * @return null|string
     */
    public function getUrl()
    {
        if (is_null($this->url)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(Image::FIELD_URL);
            if (is_null($data)) {
                return null;
            }
            $this->url = (string) $data;
        }

        return $this->url;
    }

    /**
     * @return null|ImageDimensions
     */
    public function getDimensions()
    {
        if (is_null($this->dimensions)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(Image::FIELD_DIMENSIONS);
            if (is_null($data)) {
                return null;
            }

            $this->dimensions = ImageDimensionsModel::of($data);
        }

        return $this->dimensions;
    }

    public function setLabel(?string $label): void
    {
        $this->label = $label;
    }

    public function setUrl(?string $url): void
    {
        $this->url = $url;
    }

    public function setDimensions(?ImageDimensions $dimensions): void
    {
        $this->dimensions = $dimensions;
    }
}
