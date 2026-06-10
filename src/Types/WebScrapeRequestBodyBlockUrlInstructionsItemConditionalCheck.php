<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;
use Apifreaks\Core\Types\ArrayType;

class WebScrapeRequestBodyBlockUrlInstructionsItemConditionalCheck extends JsonSerializableType
{
    /**
     * @var ?array<array<string, mixed>> $conditionalCheck
     */
    #[JsonProperty('conditionalCheck'), ArrayType([['string' => 'mixed']])]
    public ?array $conditionalCheck;

    /**
     * @param array{
     *   conditionalCheck?: ?array<array<string, mixed>>,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->conditionalCheck = $values['conditionalCheck'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
