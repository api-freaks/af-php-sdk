<?php

namespace Apifreaks\Requests;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Utils\File;

class BulkPdfGenerateFromTemplateRequest extends JsonSerializableType
{
    /**
     * @var string $apiKey Your API key
     */
    public string $apiKey;

    /**
     * @var string $templateId The template to render, from the APIFreaks PDF Template Builder. Copy it from your dashboard when you save the template.
     */
    public string $templateId;

    /**
     * @var ?string $version Template version to render, e.g. v2. Must start with v. Omit this parameter entirely to use the latest version; the literal value 'latest' is not accepted by the API.
     */
    public ?string $version;

    /**
     * @var File $file
     */
    public File $file;

    /**
     * @param array{
     *   apiKey: string,
     *   templateId: string,
     *   file: File,
     *   version?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->apiKey = $values['apiKey'];
        $this->templateId = $values['templateId'];
        $this->version = $values['version'] ?? null;
        $this->file = $values['file'];
    }
}
