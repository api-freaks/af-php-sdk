<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;

class WebScrapeRequestBodyBlockUrlInstructionsItemWait extends JsonSerializableType
{
    /**
     * @var ?int $wait Wait time in milliseconds.
     */
    #[JsonProperty('wait')]
    public ?int $wait;

    /**
     * @param array{
     *   wait?: ?int,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->wait = $values['wait'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
