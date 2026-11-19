<?php

namespace Apifreaks\Requests;

use Apifreaks\Core\Json\JsonSerializableType;

class PdfGenerateFromTemplateRequest extends JsonSerializableType
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
     * @var ?string $dataUrl A URL the API fetches your JSON data from, instead of the request body. Provide this when you are not sending a request body.
     */
    public ?string $dataUrl;

    /**
     * @var array<string, mixed> $body Free-form JSON object whose keys map to the fields bound in the template.
     */
    public array $body;

    /**
     * @param array{
     *   apiKey: string,
     *   templateId: string,
     *   body: array<string, mixed>,
     *   version?: ?string,
     *   dataUrl?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->apiKey = $values['apiKey'];
        $this->templateId = $values['templateId'];
        $this->version = $values['version'] ?? null;
        $this->dataUrl = $values['dataUrl'] ?? null;
        $this->body = $values['body'];
    }
}
