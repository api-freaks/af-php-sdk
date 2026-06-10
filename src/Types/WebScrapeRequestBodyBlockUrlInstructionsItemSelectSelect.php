<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;

class WebScrapeRequestBodyBlockUrlInstructionsItemSelectSelect extends JsonSerializableType
{
    /**
     * @var string $place
     */
    #[JsonProperty('place')]
    public string $place;

    /**
     * @var string $value
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
