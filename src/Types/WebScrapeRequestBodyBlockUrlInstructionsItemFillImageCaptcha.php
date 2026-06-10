<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;
use Apifreaks\Core\Types\ArrayType;

class WebScrapeRequestBodyBlockUrlInstructionsItemFillImageCaptcha extends JsonSerializableType
{
    /**
     * @var ?array<array<string, mixed>> $fillImageCaptcha Captures and fills CAPTCHA values automatically.
     */
    #[JsonProperty('fillImageCaptcha'), ArrayType([['string' => 'mixed']])]
    public ?array $fillImageCaptcha;

    /**
     * @param array{
     *   fillImageCaptcha?: ?array<array<string, mixed>>,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->fillImageCaptcha = $values['fillImageCaptcha'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
