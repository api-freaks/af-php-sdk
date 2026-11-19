<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;
use Apifreaks\Core\Types\ArrayType;

/**
 * Form selector and field values to submit via postForm or getForm.
 */
class WebScrapeRequestBodyOneInstructionsItemGetForm extends JsonSerializableType
{
    /**
     * @var ?string $selector CSS or XPath selector identifying the form element.
     */
    #[JsonProperty('selector')]
    public ?string $selector;

    /**
     * @var ?array<string, string> $data Form field name/value pairs to submit.
     */
    #[JsonProperty('data'), ArrayType(['string' => 'string'])]
    public ?array $data;

    /**
     * @param array{
     *   selector?: ?string,
     *   data?: ?array<string, string>,
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
