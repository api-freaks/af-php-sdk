<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;

class WebScrapeRequestBodyBlockUrlInstructionsItemGeneralImageCaptchaGeneralImageCaptchaItem extends JsonSerializableType
{
    /**
     * @var ?string $imagePath
     */
    #[JsonProperty('imagePath')]
    public ?string $imagePath;

    /**
     * @var ?string $textField
     */
    #[JsonProperty('textField')]
    public ?string $textField;

    /**
     * @var ?string $imageUpdatePath
     */
    #[JsonProperty('imageUpdatePath')]
    public ?string $imageUpdatePath;

    /**
     * @var ?string $captchaFailedPath
     */
    #[JsonProperty('captchaFailedPath')]
    public ?string $captchaFailedPath;

    /**
     * @var ?value-of<WebScrapeRequestBodyBlockUrlInstructionsItemGeneralImageCaptchaGeneralImageCaptchaItemModel> $model
     */
    #[JsonProperty('model')]
    public ?string $model;

    /**
     * @param array{
     *   imagePath?: ?string,
     *   textField?: ?string,
     *   imageUpdatePath?: ?string,
     *   captchaFailedPath?: ?string,
     *   model?: ?value-of<WebScrapeRequestBodyBlockUrlInstructionsItemGeneralImageCaptchaGeneralImageCaptchaItemModel>,
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
