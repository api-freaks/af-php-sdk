<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;

class WebScrapeRequestBodyBlockUrlInstructionsItemSelect extends JsonSerializableType
{
    /**
     * @var ?WebScrapeRequestBodyBlockUrlInstructionsItemSelectSelect $select
     */
    #[JsonProperty('select')]
    public ?WebScrapeRequestBodyBlockUrlInstructionsItemSelectSelect $select;

    /**
     * @param array{
     *   select?: ?WebScrapeRequestBodyBlockUrlInstructionsItemSelectSelect,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->select = $values['select'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
