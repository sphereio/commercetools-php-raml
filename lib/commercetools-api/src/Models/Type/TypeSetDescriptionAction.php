<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Type;

use Commercetools\Api\Models\Common\LocalizedString;

interface TypeSetDescriptionAction extends TypeUpdateAction
{
    const FIELD_DESCRIPTION = 'description';

    /**
     * @return null|LocalizedString
     */
    public function getDescription();

    public function setDescription(?LocalizedString $description): void;
}