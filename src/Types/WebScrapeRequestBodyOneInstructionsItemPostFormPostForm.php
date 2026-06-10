<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;

/**
 * Submits a form using POST method. Provide the form's XPath/CSS selector and input values.
 */
class WebScrapeRequestBodyOneInstructionsItemPostFormPostForm extends JsonSerializableType
{
    /**
     * @var ?string $selector
     */
    #[JsonProperty('selector')]
    public ?string $selector;

    /**
     * @var ?WebScrapeRequestBodyOneInstructionsItemPostFormPostFormData $data
     */
    #[JsonProperty('data')]
    public ?WebScrapeRequestBodyOneInstructionsItemPostFormPostFormData $data;

    /**
     * @param array{
     *   selector?: ?string,
     *   data?: ?WebScrapeRequestBodyOneInstructionsItemPostFormPostFormData,
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
