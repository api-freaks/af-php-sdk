<?php

namespace Apifreaks\Requests;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Types\PdfSplitRequestFormat;
use Apifreaks\Utils\File;

class PdfSplitRequest extends JsonSerializableType
{
    /**
     * @var string $apiKey Your API key
     */
    public string $apiKey;

    /**
     * @var ?value-of<PdfSplitRequestFormat> $format Specifies the desired format for the API response. Choose 'json' for a JSON object or 'xml' for an XML structure.
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
     * @var ?string $output The desired base name for the output PDF files after splitting. If not provided, a default naming convention will be used.
     */
    public ?string $output;

    /**
     * Defines the page numbers or ranges where the PDF should be split. Provide individual pages and/or ranges in any order (for example: "1-4,9-5,16-last"). Separate entries with commas and use hyphens for ranges.
     *
     * Special keywords (use alone):
     *
     * • `even` — split at every even-numbered page
     *
     * • `odd` — split at every odd-numbered page
     *
     * • `all` — split the PDF into single-page files
     *
     * The keyword `last` can be used anywhere in the string, in combination with page numbers or ranges (for example: "5-last", "last-2", "1,last,9").
     *
     * Examples:
     * - "1,4-2,last"
     * - "odd"
     * - "all"
     * - "last,2-5"
     *
     * Invalid example: "1,odd" (mixing a keyword other than "last" with specific pages/ranges is not allowed). You can pass multiple pages entries to produce multiple output files.
     *
     * @var ?array<string> $pages
     */
    public ?array $pages;

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
     *   format?: ?value-of<PdfSplitRequestFormat>,
     *   fileId?: ?string,
     *   destroy?: ?bool,
     *   output?: ?string,
     *   pages?: ?array<string>,
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
        $this->webhookUrl = $values['webhookUrl'] ?? null;
        $this->webhookFailureNotification = $values['webhookFailureNotification'] ?? null;
        $this->webhookAuthorization = $values['webhookAuthorization'] ?? null;
        $this->file = $values['file'] ?? null;
    }
}
