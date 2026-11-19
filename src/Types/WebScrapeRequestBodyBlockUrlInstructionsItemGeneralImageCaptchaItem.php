<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;

/**
 * Instructions for locating and solving a single image CAPTCHA challenge.
 */
class WebScrapeRequestBodyBlockUrlInstructionsItemGeneralImageCaptchaItem extends JsonSerializableType
{
    /**
     * @var ?string $imagePath Selector for the CAPTCHA image element.
     */
    #[JsonProperty('imagePath')]
    public ?string $imagePath;

    /**
     * @var ?string $textField Selector for the field where the CAPTCHA text is entered.
     */
    #[JsonProperty('textField')]
    public ?string $textField;

    /**
     * @var ?string $imageUpdatePath Selector to refresh or update the CAPTCHA image.
     */
    #[JsonProperty('imageUpdatePath')]
    public ?string $imageUpdatePath;

    /**
     * @var ?string $captchaFailedPath Selector indicating a CAPTCHA failure so the solver can retry.
     */
    #[JsonProperty('captchaFailedPath')]
    public ?string $captchaFailedPath;

    /**
     * @var ?value-of<WebScrapeRequestBodyBlockUrlInstructionsItemGeneralImageCaptchaItemModel> $model Model used for CAPTCHA solving.
     */
    #[JsonProperty('model')]
    public ?string $model;

    /**
     * @param array{
     *   imagePath?: ?string,
     *   textField?: ?string,
     *   imageUpdatePath?: ?string,
     *   captchaFailedPath?: ?string,
     *   model?: ?value-of<WebScrapeRequestBodyBlockUrlInstructionsItemGeneralImageCaptchaItemModel>,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->imagePath = $values['imagePath'] ?? null;
        $this->textField = $values['textField'] ?? null;
        $this->imageUpdatePath = $values['imageUpdatePath'] ?? null;
        $this->captchaFailedPath = $values['captchaFailedPath'] ?? null;
        $this->model = $values['model'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
