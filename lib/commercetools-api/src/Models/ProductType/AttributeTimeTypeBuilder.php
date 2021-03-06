<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductType;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<AttributeTimeType>
 */
final class AttributeTimeTypeBuilder implements Builder
{
    public function build(): AttributeTimeType
    {
        return new AttributeTimeTypeModel(
        );
    }

    public static function of(): AttributeTimeTypeBuilder
    {
        return new self();
    }
}
