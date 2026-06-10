<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;

class WebScrapeRequestBodyBlockUrlInstructionsItemWaitFor extends JsonSerializableType
{
    /**
     * @var ?string $waitFor
     */
    #[JsonProperty('waitFor')]
    public ?string $waitFor;

    /**
     * @param array{
     *   waitFor?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->waitFor = $values['waitFor'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
