<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Base\JsonObjectModel;
use stdClass;

final class ShippingRateInputModel extends JsonObjectModel implements ShippingRateInput
{
    const DISCRIMINATOR_VALUE = '';

    /**
     * @var ?string
     */
    protected $type;

    /**
     * @psalm-var array<string, class-string<ShippingRateInput> >
     */
    private static $discriminatorClasses = [
        'Classification' => ClassificationShippingRateInputModel::class,
        'Score' => ScoreShippingRateInputModel::class,
    ];

    public function __construct(
        string $type = null
    ) {
        $this->type = $type;
        $this->type = static::DISCRIMINATOR_VALUE;
    }

    /**
     * @return null|string
     */
    public function getType()
    {
        if (is_null($this->type)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(ShippingRateInput::FIELD_TYPE);
            if (is_null($data)) {
                return null;
            }
            $this->type = (string) $data;
        }

        return $this->type;
    }

    public function setType(?string $type): void
    {
        $this->type = $type;
    }

    /**
     * @psalm-param stdClass|array<string, mixed> $value
     * @psalm-return class-string<ShippingRateInput>
     *
     * @param mixed $value
     */
    public static function resolveDiscriminatorClass($value): string
    {
        $fieldName = ShippingRateInput::DISCRIMINATOR_FIELD;
        if (is_object($value) && isset($value->{$fieldName})) {
            /** @var string $discriminatorValue */
            $discriminatorValue = $value->{$fieldName};
            if (isset(static::$discriminatorClasses[$discriminatorValue])) {
                return static::$discriminatorClasses[$discriminatorValue];
            }
        }
        if (is_array($value) && isset($value[$fieldName])) {
            /** @var string $discriminatorValue */
            $discriminatorValue = $value[$fieldName];
            if (isset(static::$discriminatorClasses[$discriminatorValue])) {
                return static::$discriminatorClasses[$discriminatorValue];
            }
        }

        /** @psalm-var class-string<ShippingRateInput> */
        $type = ShippingRateInputModel::class;

        return $type;
    }
}