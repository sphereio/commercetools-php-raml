<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Payment;

use Commercetools\Base\Builder;

/**
 * @implements Builder<PaymentSetMethodInfoInterfaceAction>
 */
final class PaymentSetMethodInfoInterfaceActionBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $action;

    /**
     * @var ?string
     */
    private $interface;

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
     * @return null|string
     */
    public function getInterface()
    {
        return $this->interface;
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
    public function withInterface(?string $interface)
    {
        $this->interface = $interface;

        return $this;
    }

    public function build(): PaymentSetMethodInfoInterfaceAction
    {
        return new PaymentSetMethodInfoInterfaceActionModel(
            $this->action,
            $this->interface
        );
    }

    public static function of(): PaymentSetMethodInfoInterfaceActionBuilder
    {
        return new self();
    }
}
