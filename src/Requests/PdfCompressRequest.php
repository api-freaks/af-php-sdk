<?php

namespace Apifreaks\Requests;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Types\PdfCompressRequestFormat;
use Apifreaks\Types\PdfCompressRequestCompressionLevel;
use Apifreaks\Utils\File;

class PdfCompressRequest extends JsonSerializableType
{
    /**
     * @var string $apiKey Your API key
     */
    public string $apiKey;

    /**
     * @var ?value-of<PdfCompressRequestFormat> $format Specifies the desired format for the API response. Choose 'json' for a JSON object or 'xml' for an XML structure.
     */
    public ?string $format;

    /**
     * @var ?string $fileId The unique ID of a PDF file already uploaded to the API Freaks server. Use this as an alternative to uploading a new file.
     */
    public ?string $fileId;

    /**
     * @var ?string $output Name of the output PDF.
     */
    public ?string $output;

    /**
     * @var value-of<PdfCompressRequestCompressionLevel> $compressionLevel Controls how aggressively the PDF is compressed. Lower levels preserve more quality, while higher levels reduce file size more.
     */
    public string $compressionLevel;

    /**
     * @var ?bool $destroy If set to true, the input file(s) will be deleted from the server immediately after the output is generated.
     */
    public ?bool $destroy;

    /**
     * @var ?string $webhookUrl The URL to which the webhook notification will be sent after the task is completed.
     */
    public ?string $webhookUrl;

    /**
     * @var ?bool $webhookFailureNotification If true, a notification will also be sent by email in case the webhook request fails all the retries.  The email notification will be sent to the requesting user or their organization’s admin if part of one.
     */
    public ?bool $webhookFailureNotification;

    /**
     * @var ?string $webhookAuthorization Optional custom header for webhook requests. Format: `Key:Value` (e.g., `Authorization:Bearer token123`). This will be sent as an HTTP header in the webhook call.
     */
    public ?string $webhookAuthorization;

    /**
     * @var ?File $file
     */
    public ?File $file;

    /**
     * @param array{
     *   apiKey: string,
     *   compressionLevel: value-of<PdfCompressRequestCompressionLevel>,
     *   format?: ?value-of<PdfCompressRequestFormat>,
     *   fileId?: ?string,
     *   output?: ?string,
     *   destroy?: ?bool,
     *   webhookUrl?: ?string,
     *   webhookFailureNotification?: ?bool,
     *   webhookAuthorization?: ?string,
     *   file?: ?File,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->apiKey = $values['apiKey'];
        $this->format = $values['format'] ?? null;
        $this->fileId = $values['fileId'] ?? null;
        $this->output = $values['output'] ?? null;
        $this->compressionLevel = $values['compressionLevel'];
        $this->destroy = $values['destroy'] ?? null;
        $this->webhookUrl = $values['webhookUrl'] ?? null;
        $this->webhookFailureNotification = $values['webhookFailureNotification'] ?? null;
        $this->webhookAuthorization = $values['webhookAuthorization'] ?? null;
        $this->file = $values['file'] ?? null;
    }
}
