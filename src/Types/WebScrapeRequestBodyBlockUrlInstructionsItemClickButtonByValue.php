<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;

class WebScrapeRequestBodyBlockUrlInstructionsItemClickButtonByValue extends JsonSerializableType
{
    /**
     * @var ?WebScrapeRequestBodyBlockUrlInstructionsItemClickButtonByValueClickButtonByValue $clickButtonByValue
     */
    #[JsonProperty('clickButtonByValue')]
    public ?WebScrapeRequestBodyBlockUrlInstructionsItemClickButtonByValueClickButtonByValue $clickButtonByValue;

    /**
     * @param array{
     *   clickButtonByValue?: ?WebScrapeRequestBodyBlockUrlInstructionsItemClickButtonByValueClickButtonByValue,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->clickButtonByValue = $values['clickButtonByValue'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
