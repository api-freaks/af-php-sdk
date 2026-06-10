<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;

class BulkScreenshotCaptureResponseResultsItem extends JsonSerializableType
{
    /**
     * @var string $status
     */
    #[JsonProperty('status')]
    public string $status;

    /**
     * @var ?string $errorMessage
     */
    #[JsonProperty('error_message')]
    public ?string $errorMessage;

    /**
     * @var BulkScreenshotCaptureResponseResultsItemUrl $url
     */
    #[JsonProperty('url')]
    public BulkScreenshotCaptureResponseResultsItemUrl $url;

    /**
     * @param array{
     *   status: string,
     *   url: BulkScreenshotCaptureResponseResultsItemUrl,
     *   errorMessage?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->status = $values['status'];
        $this->errorMessage = $values['errorMessage'] ?? null;
        $this->url = $values['url'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
