<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;

/**
 * Selectors for locating and solving a single audio CAPTCHA challenge.
 */
class WebScrapeRequestBodyBlockUrlInstructionsItemResolveAudioCaptcha extends JsonSerializableType
{
    /**
     * @var ?string $audioPath Selector for the audio CAPTCHA element.
     */
    #[JsonProperty('audioPath')]
    public ?string $audioPath;

    /**
     * @var ?string $textField Selector for the field where the resolved audio CAPTCHA text is entered.
     */
    #[JsonProperty('textField')]
    public ?string $textField;

    /**
     * @param array{
     *   audioPath?: ?string,
     *   textField?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->audioPath = $values['audioPath'] ?? null;
        $this->textField = $values['textField'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
