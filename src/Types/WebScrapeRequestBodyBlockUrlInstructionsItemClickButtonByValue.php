<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;

/**
 * A selector/value pair used by fill, select, and clickButtonByValue instructions.
 */
class WebScrapeRequestBodyBlockUrlInstructionsItemClickButtonByValue extends JsonSerializableType
{
    /**
     * @var string $place CSS or XPath selector identifying the target element.
     */
    #[JsonProperty('place')]
    public string $place;

    /**
     * @var string $value Value to fill, select, or match against.
     */
    #[JsonProperty('value')]
    public string $value;

    /**
     * @param array{
     *   place: string,
     *   value: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->place = $values['place'];
        $this->value = $values['value'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
