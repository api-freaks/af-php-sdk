<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;

class WebScrapeRequestBodyBlockUrlInstructionsItemJsExe extends JsonSerializableType
{
    /**
     * @var ?string $jsExe
     */
    #[JsonProperty('jsExe')]
    public ?string $jsExe;

    /**
     * @param array{
     *   jsExe?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->jsExe = $values['jsExe'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
