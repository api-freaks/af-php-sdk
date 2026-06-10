<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;
use Apifreaks\Core\Types\ArrayType;

class BulkScreenshotCaptureResponse extends JsonSerializableType
{
    /**
     * @var string $status
     */
    #[JsonProperty('status')]
    public string $status;

    /**
     * @var BulkScreenshotCaptureResponseMetaData $metaData
     */
    #[JsonProperty('meta_data')]
    public BulkScreenshotCaptureResponseMetaData $metaData;

    /**
     * @var array<BulkScreenshotCaptureResponseResultsItem> $results
     */
    #[JsonProperty('results'), ArrayType([BulkScreenshotCaptureResponseResultsItem::class])]
    public array $results;

    /**
     * @param array{
     *   status: string,
     *   metaData: BulkScreenshotCaptureResponseMetaData,
     *   results: array<BulkScreenshotCaptureResponseResultsItem>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->status = $values['status'];
        $this->metaData = $values['metaData'];
        $this->results = $values['results'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
