<?php

namespace Apifreaks\Requests;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Types\PdfGetTaskStatusRequestFormat;

class PdfGetTaskStatusRequest extends JsonSerializableType
{
    /**
     * @var string $apiKey Your API key
     */
    public string $apiKey;

    /**
     * @var ?value-of<PdfGetTaskStatusRequestFormat> $format Specifies the desired format for the API response. Choose 'json' for a JSON object or 'xml' for an XML structure.
     */
    public ?string $format;

    /**
     * @var string $taskId The unique ID of the PDF processing task for which the status is requested.
     */
    public string $taskId;

    /**
     * @param array{
     *   apiKey: string,
     *   taskId: string,
     *   format?: ?value-of<PdfGetTaskStatusRequestFormat>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->apiKey = $values['apiKey'];
        $this->format = $values['format'] ?? null;
        $this->taskId = $values['taskId'];
    }
}
