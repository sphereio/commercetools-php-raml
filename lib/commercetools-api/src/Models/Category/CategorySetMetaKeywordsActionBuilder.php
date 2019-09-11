<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Category;

use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Api\Models\Common\LocalizedStringBuilder;
use Commercetools\Base\Builder;

/**
 * @implements Builder<CategorySetMetaKeywordsAction>
 */
final class CategorySetMetaKeywordsActionBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $action;

    /**
     * @var LocalizedString|?LocalizedStringBuilder
     */
    private $metaKeywords;

    public function __construct()
    {
    }

    /**
     * @return null|string
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * @return null|LocalizedString
     */
    public function getMetaKeywords()
    {
        return $this->metaKeywords instanceof LocalizedStringBuilder ? $this->metaKeywords->build() : $this->metaKeywords;
    }

    /**
     * @return $this
     */
    public function withAction(?string $action)
    {
        $this->action = $action;

        return $this;
    }

    /**
     * @return $this
     */
    public function withMetaKeywords(?LocalizedString $metaKeywords)
    {
        $this->metaKeywords = $metaKeywords;

        return $this;
    }

    /**
     * @return $this
     */
    public function withMetaKeywordsBuilder(?LocalizedStringBuilder $metaKeywords)
    {
        $this->metaKeywords = $metaKeywords;

        return $this;
    }

    public function build(): CategorySetMetaKeywordsAction
    {
        return new CategorySetMetaKeywordsActionModel(
            $this->action,
            ($this->metaKeywords instanceof LocalizedStringBuilder ? $this->metaKeywords->build() : $this->metaKeywords)
        );
    }

    public static function of(): CategorySetMetaKeywordsActionBuilder
    {
        return new self();
    }
}