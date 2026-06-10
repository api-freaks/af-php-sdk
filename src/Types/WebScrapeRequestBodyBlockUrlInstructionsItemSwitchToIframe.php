<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;

class WebScrapeRequestBodyBlockUrlInstructionsItemSwitchToIframe extends JsonSerializableType
{
    /**
     * @var ?string $switchToIframe Switches to an iframe by name or ID.
     */
    #[JsonProperty('switchToIframe')]
    public ?string $switchToIframe;

    /**
     * @param array{
     *   switchToIframe?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->switchToIframe = $values['switchToIframe'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
