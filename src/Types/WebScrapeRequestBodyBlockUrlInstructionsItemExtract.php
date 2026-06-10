<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;

class WebScrapeRequestBodyBlockUrlInstructionsItemExtract extends JsonSerializableType
{
    /**
     * @var ?WebScrapeRequestBodyBlockUrlInstructionsItemExtractExtract $extract Defines what data to extract and how to extract it.
     */
    #[JsonProperty('extract')]
    public ?WebScrapeRequestBodyBlockUrlInstructionsItemExtractExtract $extract;

    /**
     * @param array{
     *   extract?: ?WebScrapeRequestBodyBlockUrlInstructionsItemExtractExtract,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->extract = $values['extract'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
