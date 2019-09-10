<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Review;

interface ReviewSetTextAction extends ReviewUpdateAction
{
    const FIELD_TEXT = 'text';

    /**
     * @return null|string
     */
    public function getText();

    public function setText(?string $text): void;
}
