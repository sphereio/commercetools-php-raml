<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Me;

use Commercetools\Api\Models\Common\LocalizedString;

interface MyShoppingListChangeNameAction extends MyShoppingListUpdateAction
{
    const FIELD_NAME = 'name';

    /**
     * @return null|LocalizedString
     */
    public function getName();

    public function setName(?LocalizedString $name): void;
}