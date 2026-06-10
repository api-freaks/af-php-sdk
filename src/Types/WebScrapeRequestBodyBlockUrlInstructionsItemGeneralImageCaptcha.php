<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;
use Apifreaks\Core\Types\ArrayType;

class WebScrapeRequestBodyBlockUrlInstructionsItemGeneralImageCaptcha extends JsonSerializableType
{
    /**
     * @var ?array<WebScrapeRequestBodyBlockUrlInstructionsItemGeneralImageCaptchaGeneralImageCaptchaItem> $generalImageCaptcha Instructions for solving image captchas.
     */
    #[JsonProperty('generalImageCaptcha'), ArrayType([WebScrapeRequestBodyBlockUrlInstructionsItemGeneralImageCaptchaGeneralImageCaptchaItem::class])]
    public ?array $generalImageCaptcha;

    /**
     * @param array{
     *   generalImageCaptcha?: ?array<WebScrapeRequestBodyBlockUrlInstructionsItemGeneralImageCaptchaGeneralImageCaptchaItem>,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->generalImageCaptcha = $values['generalImageCaptcha'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
