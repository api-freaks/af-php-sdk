<?php

namespace Apifreaks\Requests;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Types\PdfRotateRequestFormat;
use Apifreaks\Utils\File;

class PdfRotateRequest extends JsonSerializableType
{
    /**
     * @var string $apiKey Your API key
     */
    public string $apiKey;

    /**
     * @var ?value-of<PdfRotateRequestFormat> $format Specifies the desired format for the API response. Choose 'json' for a JSON object or 'xml' for an XML structure.
     */
    public ?string $format;

    /**
     * @var ?string $fileId The unique ID of a PDF file already uploaded to the API Freaks server. Use this as an alternative to uploading a new file directly.
     */
    public ?string $fileId;

    /**
     * @var ?bool $destroy If set to `true`, the input file(s) will be permanently deleted from the server immediately after the output PDF is generated.
     */
    public ?bool $destroy;

    /**
     * @var ?string $output The desired name for the output PDF file after rotation. If not provided, a default name will be assigned.
     */
    public ?string $output;

    /**
     * @var ?string $pages Specifies which pages to rotate. Accepts individual page numbers (e.g., '1,7') and/or ascending page ranges (e.g., '3-5'). Use commas to separate entries and hyphens for ranges. Reverse ranges (e.g., '5-3') are not allowed. Alternatively, provide only one of the following keywords: 'even' (rotate all even-numbered pages), 'odd' (rotate all odd-numbered pages), 'last' (rotate only the last page), or 'all' (rotate all pages). Examples: '1,3-5', 'odd', 'all'. Mixing special keywords with specific pages/ranges is not allowed.
     */
    public ?string $pages;

    /**
     * @var int $rotate The angle in degrees to rotate the selected pages. Must be one of the following values: 0, 90, 180, 270, -90, -180, or -270. All rotations are applied clockwise.
     */
    public int $rotate;

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
     *   rotate: int,
     *   format?: ?value-of<PdfRotateRequestFormat>,
     *   fileId?: ?string,
     *   destroy?: ?bool,
     *   output?: ?string,
     *   pages?: ?string,
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
        $this->destroy = $values['destroy'] ?? null;
        $this->output = $values['output'] ?? null;
        $this->pages = $values['pages'] ?? null;
        $this->rotate = $values['rotate'];
        $this->webhookUrl = $values['webhookUrl'] ?? null;
        $this->webhookFailureNotification = $values['webhookFailureNotification'] ?? null;
        $this->webhookAuthorization = $values['webhookAuthorization'] ?? null;
        $this->file = $values['file'] ?? null;
    }
}
