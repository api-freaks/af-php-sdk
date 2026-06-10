<?php

namespace Apifreaks\Requests;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Types\PdfMergeRequestFormat;
use Apifreaks\Utils\File;

class PdfMergeRequest extends JsonSerializableType
{
    /**
     * @var string $apiKey Your API key
     */
    public string $apiKey;

    /**
     * @var ?value-of<PdfMergeRequestFormat> $format Specifies the desired format for the API response. Choose 'json' for a JSON object or 'xml' for an XML structure.
     */
    public ?string $format;

    /**
     * @var ?array<string> $fileId An array of unique file IDs referencing PDF files previously uploaded to the API Freaks server. Use this parameter to merge existing files without re-uploading them. Provide multiple IDs to merge files in the specified order.
     */
    public ?array $fileId;

    /**
     * @var ?bool $destroy If set to `true`, the input file(s) will be permanently deleted from the server immediately after the output PDF is generated.
     */
    public ?bool $destroy;

    /**
     * @var ?string $output Specifies the desired name for the resulting merged PDF file. If not provided, a default name will be assigned.
     */
    public ?string $output;

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
     * @var ?array<File> $file
     */
    public ?array $file;

    /**
     * @param array{
     *   apiKey: string,
     *   format?: ?value-of<PdfMergeRequestFormat>,
     *   fileId?: ?array<string>,
     *   destroy?: ?bool,
     *   output?: ?string,
     *   webhookUrl?: ?string,
     *   webhookFailureNotification?: ?bool,
     *   webhookAuthorization?: ?string,
     *   file?: ?array<File>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->apiKey = $values['apiKey'];
        $this->format = $values['format'] ?? null;
        $this->fileId = $values['fileId'] ?? null;
        $this->destroy = $values['destroy'] ?? null;
        $this->output = $values['output'] ?? null;
        $this->webhookUrl = $values['webhookUrl'] ?? null;
        $this->webhookFailureNotification = $values['webhookFailureNotification'] ?? null;
        $this->webhookAuthorization = $values['webhookAuthorization'] ?? null;
        $this->file = $values['file'] ?? null;
    }
}
