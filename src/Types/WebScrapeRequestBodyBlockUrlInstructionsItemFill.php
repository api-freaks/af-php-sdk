<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;

class WebScrapeRequestBodyBlockUrlInstructionsItemFill extends JsonSerializableType
{
    /**
     * @var ?WebScrapeRequestBodyBlockUrlInstructionsItemFillFill $fill
     */
    #[JsonProperty('fill')]
    public ?WebScrapeRequestBodyBlockUrlInstructionsItemFillFill $fill;

    /**
     * @param array{
     *   fill?: ?WebScrapeRequestBodyBlockUrlInstructionsItemFillFill,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->fill = $values['fill'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
