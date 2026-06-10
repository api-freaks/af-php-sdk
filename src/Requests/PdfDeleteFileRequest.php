<?php

namespace Apifreaks\Requests;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Types\PdfDeleteFileRequestFormat;

class PdfDeleteFileRequest extends JsonSerializableType
{
    /**
     * @var string $apiKey Your API key
     */
    public string $apiKey;

    /**
     * @var ?value-of<PdfDeleteFileRequestFormat> $format Specifies the desired format for the API response. Choose 'json' for a JSON object or 'xml' for an XML structure.
     */
    public ?string $format;

    /**
     * @var string $fileId The unique ID of the file to be deleted.
     */
    public string $fileId;

    /**
     * @param array{
     *   apiKey: string,
     *   fileId: string,
     *   format?: ?value-of<PdfDeleteFileRequestFormat>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->apiKey = $values['apiKey'];
        $this->format = $values['format'] ?? null;
        $this->fileId = $values['fileId'];
    }
}
