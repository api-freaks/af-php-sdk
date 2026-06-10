<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;

class WebScrapeRequestBodyBlockUrlInstructionsItemMoveToRelativeTab extends JsonSerializableType
{
    /**
     * @var ?int $moveToRelativeTab
     */
    #[JsonProperty('moveToRelativeTab')]
    public ?int $moveToRelativeTab;

    /**
     * @param array{
     *   moveToRelativeTab?: ?int,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->moveToRelativeTab = $values['moveToRelativeTab'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
