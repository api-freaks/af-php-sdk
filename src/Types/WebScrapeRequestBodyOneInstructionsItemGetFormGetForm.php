<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;

/**
 * Submits a form using GET method. Provide the form's XPath/CSS selector and input values.
 */
class WebScrapeRequestBodyOneInstructionsItemGetFormGetForm extends JsonSerializableType
{
    /**
     * @var ?string $selector
     */
    #[JsonProperty('selector')]
    public ?string $selector;

    /**
     * @var ?WebScrapeRequestBodyOneInstructionsItemGetFormGetFormData $data
     */
    #[JsonProperty('data')]
    public ?WebScrapeRequestBodyOneInstructionsItemGetFormGetFormData $data;

    /**
     * @param array{
     *   selector?: ?string,
     *   data?: ?WebScrapeRequestBodyOneInstructionsItemGetFormGetFormData,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->selector = $values['selector'] ?? null;
        $this->data = $values['data'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
