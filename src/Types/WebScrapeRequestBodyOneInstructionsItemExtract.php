<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;

class WebScrapeRequestBodyOneInstructionsItemExtract extends JsonSerializableType
{
    /**
     * @var ?WebScrapeRequestBodyOneInstructionsItemExtractExtract $extract Defines what data to extract and how to extract it.
     */
    #[JsonProperty('extract')]
    public ?WebScrapeRequestBodyOneInstructionsItemExtractExtract $extract;

    /**
     * @param array{
     *   extract?: ?WebScrapeRequestBodyOneInstructionsItemExtractExtract,
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
