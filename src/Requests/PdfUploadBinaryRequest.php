<?php

namespace Apifreaks\Requests;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Types\PdfUploadBinaryRequestFormat;

class PdfUploadBinaryRequest extends JsonSerializableType
{
    /**
     * @var string $apiKey Your API key
     */
    public string $apiKey;

    /**
     * @var ?value-of<PdfUploadBinaryRequestFormat> $format Specifies the desired format for the API response. Choose 'json' for a JSON object or 'xml' for an XML structure.
     */
    public ?string $format;

    /**
     * The desired name for the uploaded PDF file. This name will be used for storage on the server.
     *
     *
     *  **NOTE**: Please ensure file_name has extension `.pdf`.
     *
     * @var string $fileName
     */
    public string $fileName;

    /**
     * @param array{
     *   apiKey: string,
     *   fileName: string,
     *   format?: ?value-of<PdfUploadBinaryRequestFormat>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->apiKey = $values['apiKey'];
        $this->format = $values['format'] ?? null;
        $this->fileName = $values['fileName'];
    }
}
