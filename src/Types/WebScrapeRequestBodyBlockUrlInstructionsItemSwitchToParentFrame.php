<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;

class WebScrapeRequestBodyBlockUrlInstructionsItemSwitchToParentFrame extends JsonSerializableType
{
    /**
     * @var ?bool $switchToParentFrame Returns from iframe to parent context.
     */
    #[JsonProperty('switchToParentFrame')]
    public ?bool $switchToParentFrame;

    /**
     * @param array{
     *   switchToParentFrame?: ?bool,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->switchToParentFrame = $values['switchToParentFrame'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
