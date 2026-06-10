<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;

class WebScrapeRequestBodyBlockUrlInstructionsItemClickIfExist extends JsonSerializableType
{
    /**
     * @var ?string $clickIfExist
     */
    #[JsonProperty('clickIfExist')]
    public ?string $clickIfExist;

    /**
     * @param array{
     *   clickIfExist?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->clickIfExist = $values['clickIfExist'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
