<?php

namespace Apifreaks\Requests;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Types\PdfUploadResourcesRequestFormat;
use Apifreaks\Utils\File;

class PdfUploadResourcesRequest extends JsonSerializableType
{
    /**
     * @var string $apiKey Your API key
     */
    public string $apiKey;

    /**
     * @var ?value-of<PdfUploadResourcesRequestFormat> $format Specifies the desired format for the API response. Choose 'json' for a JSON object or 'xml' for an XML structure.
     */
    public ?string $format;

    /**
     * @var ?array<File> $file
     */
    public ?array $file;

    /**
     * @param array{
     *   apiKey: string,
     *   format?: ?value-of<PdfUploadResourcesRequestFormat>,
     *   file?: ?array<File>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->apiKey = $values['apiKey'];
        $this->format = $values['format'] ?? null;
        $this->file = $values['file'] ?? null;
    }
}
