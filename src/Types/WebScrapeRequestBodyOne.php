<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;
use Apifreaks\Core\Types\ArrayType;

class WebScrapeRequestBodyOne extends JsonSerializableType
{
    /**
     * @var array<WebScrapeRequestBodyOneInstructionsItem> $instructions A list of sequential instructions to execute against the static HTML response. Each item is one StaticInstruction object, with exactly one action field set.
     */
    #[JsonProperty('instructions'), ArrayType([WebScrapeRequestBodyOneInstructionsItem::class])]
    public array $instructions;

    /**
     * @param array{
     *   instructions: array<WebScrapeRequestBodyOneInstructionsItem>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->instructions = $values['instructions'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
