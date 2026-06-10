<?php

namespace Apifreaks\Requests;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Types\PdfRestrictRequestFormat;
use Apifreaks\Types\PdfRestrictRequestRestrictionsItem;
use Apifreaks\Utils\File;

class PdfRestrictRequest extends JsonSerializableType
{
    /**
     * @var string $apiKey Your API key
     */
    public string $apiKey;

    /**
     * @var ?value-of<PdfRestrictRequestFormat> $format Specifies the desired format for the API response. Choose 'json' for a JSON object or 'xml' for an XML structure.
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
     * @var ?string $output The desired name for the output restricted PDF file. If not provided, a default name will be assigned.
     */
    public ?string $output;

    /**
     * @var ?string $filePassword The password to unlock the input file if it is already secured. Provide the owner password if available; otherwise, the user password. The owner password takes precedence. Password Length should be between 6 and 128 characters.
     */
    public ?string $filePassword;

    /**
     * @var string $userPassword Sets the password users will use to open the PDF. If this is not set, only the owner password will be configured, and anyone can open the PDF file with the provided restrictions enabled. Password Length should be between 6 and 128 characters.
     */
    public string $userPassword;

    /**
     * @var ?string $ownerPassword Sets the password that allows full access to the PDF (e.g., removing restrictions). If not provided, the `user_password` (if set) will also be used as the owner password. Password Length should be between 6 and 128 characters.
     */
    public ?string $ownerPassword;

    /**
     * A comma-separated list of restrictions to apply to the PDF. These define what the end-user is *not* allowed to do with the PDF. Available options are:
     *
     *
     * * **print_high** – Disables high-quality printing.
     * * **print_low** – Disables low-resolution printing.
     * * **edit_document_assembly** – Prevents reordering or inserting pages.
     * * **fill_form_fields** – Disallows filling in PDF form fields.
     * * **edit_annotations** – Disables adding or modifying annotations or comments.
     * * **modify_content** – Prevents modifying existing content in the PDF.
     * * **copy_and_extract_content** – Disables copying text or images from the PDF.
     * * **use_accessibility** – Prevents screen readers or accessibility tools from accessing content.
     *
     * @var ?array<value-of<PdfRestrictRequestRestrictionsItem>> $restrictions
     */
    public ?array $restrictions;

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
     *   userPassword: string,
     *   format?: ?value-of<PdfRestrictRequestFormat>,
     *   fileId?: ?string,
     *   destroy?: ?bool,
     *   output?: ?string,
     *   filePassword?: ?string,
     *   ownerPassword?: ?string,
     *   restrictions?: ?array<value-of<PdfRestrictRequestRestrictionsItem>>,
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
        $this->filePassword = $values['filePassword'] ?? null;
        $this->userPassword = $values['userPassword'];
        $this->ownerPassword = $values['ownerPassword'] ?? null;
        $this->restrictions = $values['restrictions'] ?? null;
        $this->webhookUrl = $values['webhookUrl'] ?? null;
        $this->webhookFailureNotification = $values['webhookFailureNotification'] ?? null;
        $this->webhookAuthorization = $values['webhookAuthorization'] ?? null;
        $this->file = $values['file'] ?? null;
    }
}
