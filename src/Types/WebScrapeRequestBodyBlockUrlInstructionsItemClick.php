<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;

class WebScrapeRequestBodyBlockUrlInstructionsItemClick extends JsonSerializableType
{
    /**
     * @var ?string $click
     */
    #[JsonProperty('click')]
    public ?string $click;

    /**
     * @param array{
     *   click?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->click = $values['click'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
