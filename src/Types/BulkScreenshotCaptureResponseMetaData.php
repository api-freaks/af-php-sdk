<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;

class BulkScreenshotCaptureResponseMetaData extends JsonSerializableType
{
    /**
     * @var int $totalUrls
     */
    #[JsonProperty('total_urls')]
    public int $totalUrls;

    /**
     * @var int $successfulUrls
     */
    #[JsonProperty('successful_urls')]
    public int $successfulUrls;

    /**
     * @var int $failedUrls
     */
    #[JsonProperty('failed_urls')]
    public int $failedUrls;

    /**
     * @param array{
     *   totalUrls: int,
     *   successfulUrls: int,
     *   failedUrls: int,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->totalUrls = $values['totalUrls'];
        $this->successfulUrls = $values['successfulUrls'];
        $this->failedUrls = $values['failedUrls'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
