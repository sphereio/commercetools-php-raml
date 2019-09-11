<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Api\Models\Common\LocalizedStringModel;
use Commercetools\Base\JsonObjectModel;
use stdClass;

final class CategorySlugChangedMessagePayloadModel extends JsonObjectModel implements CategorySlugChangedMessagePayload
{
    const DISCRIMINATOR_VALUE = 'CategorySlugChanged';

    /**
     * @var ?string
     */
    protected $type;

    /**
     * @var ?LocalizedString
     */
    protected $slug;

    public function __construct(
        string $type = null,
        LocalizedString $slug = null
    ) {
        $this->type = $type;
        $this->slug = $slug;
    }

    /**
     * @return null|string
     */
    public function getType()
    {
        if (is_null($this->type)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(MessagePayload::FIELD_TYPE);
            if (is_null($data)) {
                return null;
            }
            $this->type = (string) $data;
        }

        return $this->type;
    }

    /**
     * @return null|LocalizedString
     */
    public function getSlug()
    {
        if (is_null($this->slug)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(CategorySlugChangedMessagePayload::FIELD_SLUG);
            if (is_null($data)) {
                return null;
            }

            $this->slug = LocalizedStringModel::of($data);
        }

        return $this->slug;
    }

    public function setType(?string $type): void
    {
        $this->type = $type;
    }

    public function setSlug(?LocalizedString $slug): void
    {
        $this->slug = $slug;
    }
}