<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;
use Apifreaks\Core\Types\ArrayType;

class WebScrapeRequestBodyBlockUrlInstructionsItemResolveAudioCaptcha extends JsonSerializableType
{
    /**
     * @var ?array<string, mixed> $resolveAudioCaptcha Solves audio CAPTCHA challenges.
     */
    #[JsonProperty('resolveAudioCaptcha'), ArrayType(['string' => 'mixed'])]
    public ?array $resolveAudioCaptcha;

    /**
     * @param array{
     *   resolveAudioCaptcha?: ?array<string, mixed>,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->resolveAudioCaptcha = $values['resolveAudioCaptcha'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
