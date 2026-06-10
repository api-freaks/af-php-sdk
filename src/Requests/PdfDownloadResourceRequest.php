<?php

namespace Apifreaks\Requests;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Types\PdfDownloadResourceRequestFormat;

class PdfDownloadResourceRequest extends JsonSerializableType
{
    /**
     * @var string $apiKey Your API key
     */
    public string $apiKey;

    /**
     * @var ?value-of<PdfDownloadResourceRequestFormat> $format
     */
    public ?string $format;

    /**
     * @var string $resourceId The unique identifier of the file or ZIP archive to download.
     */
    public string $resourceId;

    /**
     * @param array{
     *   apiKey: string,
     *   resourceId: string,
     *   format?: ?value-of<PdfDownloadResourceRequestFormat>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->apiKey = $values['apiKey'];
        $this->format = $values['format'] ?? null;
        $this->resourceId = $values['resourceId'];
    }
}
