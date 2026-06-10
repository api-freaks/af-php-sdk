<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;

class WebScrapeRequestBodyBlockUrlInstructionsItemNewTab extends JsonSerializableType
{
    /**
     * @var ?bool $newTab
     */
    #[JsonProperty('newTab')]
    public ?bool $newTab;

    /**
     * @param array{
     *   newTab?: ?bool,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->newTab = $values['newTab'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
