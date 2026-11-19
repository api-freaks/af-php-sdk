<?php

namespace Apifreaks\Requests;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Types\OcrPredictRequestModel;
use Apifreaks\Utils\File;

class OcrPredictRequest extends JsonSerializableType
{
    /**
     * @var string $apiKey Your API key
     */
    public string $apiKey;

    /**
     * @var value-of<OcrPredictRequestModel> $model OCR model to use. `mini-ocr-v1` for CAPTCHA OCR, `ocr-v1` for general OCR.
     */
    public string $model;

    /**
     * @var ?string $url URL of the image or PDF (required if `file` is not uploaded).
     */
    public ?string $url;

    /**
     * @var ?string $pageRange Specify page range for multi-page PDFs (e.g., '1,3,5-10' or 'allpages'). **Note:** This parameter can only be used with .pdf file types.
     */
    public ?string $pageRange;

    /**
     * @var ?string $zone Define OCR zones using coordinates (top:left:height:width). Multiple zones can be defined using commas. Only available for model 'ocr-v1'. **Note:** This parameter cannot be used with .pdf and .zip file types as it can only be applied to single image queries.
     */
    public ?string $zone;

    /**
     * @var ?int $newLine Set to 1 to split output text into individual lines (default: 0). This changes the shape of `OCRText` (see the response).
     */
    public ?int $newLine;

    /**
     * @var ?File $file
     */
    public ?File $file;

    /**
     * @param array{
     *   apiKey: string,
     *   model: value-of<OcrPredictRequestModel>,
     *   url?: ?string,
     *   pageRange?: ?string,
     *   zone?: ?string,
     *   newLine?: ?int,
     *   file?: ?File,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->apiKey = $values['apiKey'];
        $this->model = $values['model'];
        $this->url = $values['url'] ?? null;
        $this->pageRange = $values['pageRange'] ?? null;
        $this->zone = $values['zone'] ?? null;
        $this->newLine = $values['newLine'] ?? null;
        $this->file = $values['file'] ?? null;
    }
}
