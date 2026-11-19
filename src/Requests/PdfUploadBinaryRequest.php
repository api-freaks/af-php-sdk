<?php

namespace Apifreaks\Requests;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Types\PdfUploadBinaryRequestFormat;
use Psr\Http\Message\StreamInterface;

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
     * @var string|StreamInterface $body The PDF file to upload: its raw bytes (e.g. file_get_contents('doc.pdf')) or a PSR-7 stream. Sent as the application/octet-stream request body.
     */
    public string|StreamInterface $body;

    /**
     * @param array{
     *   apiKey: string,
     *   fileName: string,
     *   body: string|StreamInterface,
     *   format?: ?value-of<PdfUploadBinaryRequestFormat>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->apiKey = $values['apiKey'];
        $this->format = $values['format'] ?? null;
        $this->fileName = $values['fileName'];
        $this->body = $values['body'];
    }
}
