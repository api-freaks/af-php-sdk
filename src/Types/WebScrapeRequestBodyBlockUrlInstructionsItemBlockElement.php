<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;
use Apifreaks\Core\Types\ArrayType;

class WebScrapeRequestBodyBlockUrlInstructionsItemBlockElement extends JsonSerializableType
{
    /**
     * @var ?array<string> $blockElement List of CSS selectors or XPaths for elements to block or hide on the page.
     */
    #[JsonProperty('blockElement'), ArrayType(['string'])]
    public ?array $blockElement;

    /**
     * @param array{
     *   blockElement?: ?array<string>,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->blockElement = $values['blockElement'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
