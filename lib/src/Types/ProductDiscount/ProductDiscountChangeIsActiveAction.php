<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ProductDiscount;

interface ProductDiscountChangeIsActiveAction extends ProductDiscountUpdateAction {
    const FIELD_IS_ACTIVE = 'isActive';

    /**
     * @return mixed
     */
    public function getIsActive();

    /**
     * @param mixed $isActive
     * @return $this
     */
    public function setIsActive($isActive);

}