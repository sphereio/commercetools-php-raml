<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Review;

use Commercetools\Base\JsonObjectModel;

final class ReviewSetTextActionModel extends JsonObjectModel implements ReviewSetTextAction
{
    const DISCRIMINATOR_VALUE = 'setText';

    /**
     * @var ?string
     */
    protected $action;

    /**
     * @var ?string
     */
    protected $text;

    public function __construct(
        string $action = null,
        string $text = null
    ) {
        $this->action = $action;
        $this->text = $text;
    }

    /**
     * @return null|string
     */
    public function getAction()
    {
        if (is_null($this->action)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(ReviewUpdateAction::FIELD_ACTION);
            if (is_null($data)) {
                return null;
            }
            $this->action = (string) $data;
        }

        return $this->action;
    }

    /**
     * @return null|string
     */
    public function getText()
    {
        if (is_null($this->text)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(ReviewSetTextAction::FIELD_TEXT);
            if (is_null($data)) {
                return null;
            }
            $this->text = (string) $data;
        }

        return $this->text;
    }

    public function setAction(?string $action): void
    {
        $this->action = $action;
    }

    public function setText(?string $text): void
    {
        $this->text = $text;
    }
}
