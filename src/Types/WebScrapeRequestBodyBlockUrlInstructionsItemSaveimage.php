<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;

class WebScrapeRequestBodyBlockUrlInstructionsItemSaveimage extends JsonSerializableType
{
    /**
     * @var ?string $saveimage Saves image using selector or ID.
     */
    #[JsonProperty('saveimage')]
    public ?string $saveimage;

    /**
     * @param array{
     *   saveimage?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->saveimage = $values['saveimage'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
