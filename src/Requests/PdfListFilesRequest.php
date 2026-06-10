<?php

namespace Apifreaks\Requests;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Types\PdfListFilesRequestFormat;

class PdfListFilesRequest extends JsonSerializableType
{
    /**
     * @var string $apiKey Your API key
     */
    public string $apiKey;

    /**
     * @var ?value-of<PdfListFilesRequestFormat> $format Specifies the desired format for the API response. Choose 'json' for a JSON object or 'xml' for an XML structure.
     */
    public ?string $format;

    /**
     * @param array{
     *   apiKey: string,
     *   format?: ?value-of<PdfListFilesRequestFormat>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->apiKey = $values['apiKey'];
        $this->format = $values['format'] ?? null;
    }
}
