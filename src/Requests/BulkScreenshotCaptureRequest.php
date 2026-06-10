<?php

namespace Apifreaks\Requests;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Types\BulkScreenshotCaptureRequestFormat;
use Apifreaks\Types\BulkScreenshotCaptureRequestUrlsItem;
use Apifreaks\Core\Json\JsonProperty;
use Apifreaks\Core\Types\ArrayType;

class BulkScreenshotCaptureRequest extends JsonSerializableType
{
    /**
     * @var string $apiKey Your API key
     */
    public string $apiKey;

    /**
     * @var ?value-of<BulkScreenshotCaptureRequestFormat> $format
     */
    public ?string $format;

    /**
     * @var array<BulkScreenshotCaptureRequestUrlsItem> $urls List of website URLs to capture screenshots of
     */
    #[JsonProperty('urls'), ArrayType([BulkScreenshotCaptureRequestUrlsItem::class])]
    public array $urls;

    /**
     * @param array{
     *   apiKey: string,
     *   urls: array<BulkScreenshotCaptureRequestUrlsItem>,
     *   format?: ?value-of<BulkScreenshotCaptureRequestFormat>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->apiKey = $values['apiKey'];
        $this->format = $values['format'] ?? null;
        $this->urls = $values['urls'];
    }
}
