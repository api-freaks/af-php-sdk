<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;

class WebScrapeRequestBodyBlockUrlInstructionsItemEnter extends JsonSerializableType
{
    /**
     * @var ?string $enter
     */
    #[JsonProperty('enter')]
    public ?string $enter;

    /**
     * @param array{
     *   enter?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->enter = $values['enter'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
