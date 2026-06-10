<?php

namespace Apifreaks\Requests;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Types\PdfGetFileStatusRequestFormat;

class PdfGetFileStatusRequest extends JsonSerializableType
{
    /**
     * @var string $apiKey Your API key
     */
    public string $apiKey;

    /**
     * @var ?value-of<PdfGetFileStatusRequestFormat> $format Specifies the desired format for the API response. Choose 'json' for a JSON object or 'xml' for an XML structure.
     */
    public ?string $format;

    /**
     * @var string $fileId The unique ID of the file whose status is requested.
     */
    public string $fileId;

    /**
     * @param array{
     *   apiKey: string,
     *   fileId: string,
     *   format?: ?value-of<PdfGetFileStatusRequestFormat>,
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
