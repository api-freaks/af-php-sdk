<?php

namespace Apifreaks\Requests;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Types\OcrPredictRequestModel;
use Apifreaks\Core\Json\JsonProperty;

class OcrPredictRequest extends JsonSerializableType
{
    /**
     * @var string $apiKey Your API key
     */
    public string $apiKey;

    /**
     * @var ?string $url URL of the image or PDF (required if `file` not provided)
     */
    public ?string $url;

    /**
     * @var value-of<OcrPredictRequestModel> $model OCR model to use.
     */
    public string $model;

    /**
     * @var ?string $pageRange Specify page range for multi-page PDFs (e.g., '1,3,5-10' or 'allpages'). **Note:** This parameter can only be used with .pdf file types.
     */
    public ?string $pageRange;

    /**
     * @var ?string $zone Define OCR zones using coordinates (top:left:height:width). Multiple zones can be defined using commas. Only available for model 'ocr-v1'. **Note:** This parameter cannot be used with .pdf and .zip file types as it can only be applied to single image queries.
     */
    public ?string $zone;

    /**
     * @var ?int $newLine Set to 1 to split output text into individual lines (default: 0)
     */
    public ?int $newLine;

    /**
     * @var ?string $ocrPredictRequestUrl URL of the image or PDF (required if `file` not provided)
     */
    #[JsonProperty('url')]
    public ?string $ocrPredictRequestUrl;

    /**
     * @var value-of<OcrPredictRequestModel> $ocrPredictRequestModel OCR model to use. `mini-ocr-v1` for CAPTCHA OCR, `ocr-v1` for general OCR
     */
    #[JsonProperty('model')]
    public string $ocrPredictRequestModel;

    /**
     * @var ?string $ocrPredictRequestPageRange Specify page range for multi-page PDFs (e.g., '1,3,5-10' or 'allpages'). **Note:** This parameter can only be used with .pdf file types.
     */
    #[JsonProperty('page_range')]
    public ?string $ocrPredictRequestPageRange;

    /**
     * @var ?string $ocrPredictRequestZone Define OCR zones using coordinates (top:left:height:width). Multiple zones can be defined using commas. Only available for model 'ocr-v1'. **Note:** This parameter cannot be used with .pdf and .zip file types as it can only be applied to single image queries.
     */
    #[JsonProperty('zone')]
    public ?string $ocrPredictRequestZone;

    /**
     * @var ?int $ocrPredictRequestNewLine Set to 1 to split output text into individual lines (default: 0)
     */
    #[JsonProperty('new_line')]
    public ?int $ocrPredictRequestNewLine;

    /**
     * @param array{
     *   apiKey: string,
     *   model: value-of<OcrPredictRequestModel>,
     *   ocrPredictRequestModel: value-of<OcrPredictRequestModel>,
     *   url?: ?string,
     *   pageRange?: ?string,
     *   zone?: ?string,
     *   newLine?: ?int,
     *   ocrPredictRequestUrl?: ?string,
     *   ocrPredictRequestPageRange?: ?string,
     *   ocrPredictRequestZone?: ?string,
     *   ocrPredictRequestNewLine?: ?int,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->apiKey = $values['apiKey'];
        $this->url = $values['url'] ?? null;
        $this->model = $values['model'];
        $this->pageRange = $values['pageRange'] ?? null;
        $this->zone = $values['zone'] ?? null;
        $this->newLine = $values['newLine'] ?? null;
        $this->ocrPredictRequestUrl = $values['ocrPredictRequestUrl'] ?? null;
        $this->ocrPredictRequestModel = $values['ocrPredictRequestModel'];
        $this->ocrPredictRequestPageRange = $values['ocrPredictRequestPageRange'] ?? null;
        $this->ocrPredictRequestZone = $values['ocrPredictRequestZone'] ?? null;
        $this->ocrPredictRequestNewLine = $values['ocrPredictRequestNewLine'] ?? null;
    }
}
