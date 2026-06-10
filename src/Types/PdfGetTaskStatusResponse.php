<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;
use DateTime;
use Apifreaks\Core\Types\Date;
use Apifreaks\Core\Types\ArrayType;

class PdfGetTaskStatusResponse extends JsonSerializableType
{
    /**
     * @var string $taskId The unique identifier of the PDF processing task.
     */
    #[JsonProperty('taskId')]
    public string $taskId;

    /**
     * @var string $status The current status of the task (e.g., 'queued', 'processing', 'completed', 'failed').
     */
    #[JsonProperty('status')]
    public string $status;

    /**
     * @var DateTime $createdAt The timestamp when the task status was created, formatted as 'yyyy-MM-dd HH:mm:ss'.
     */
    #[JsonProperty('createdAt'), Date(Date::TYPE_DATETIME)]
    public DateTime $createdAt;

    /**
     * @var ?string $zipOutputUrl The URL to download all output files as a single ZIP archive. This is present only when the task status is 'COMPLETED'.
     */
    #[JsonProperty('zipOutputUrl')]
    public ?string $zipOutputUrl;

    /**
     * @var ?string $zipFileId The unique identifier for the ZIP file. This is present only when the task status is 'COMPLETED'.
     */
    #[JsonProperty('zipFileId')]
    public ?string $zipFileId;

    /**
     * @var ?array<string> $outputUrls A list of URLs for each individual output file. This is present only when the task is 'COMPLETED'.
     */
    #[JsonProperty('outputUrls'), ArrayType(['string'])]
    public ?array $outputUrls;

    /**
     * @var ?array<string> $outputIds A list of unique IDs for the output files. This is present only when the task is 'COMPLETED'.
     */
    #[JsonProperty('outputIds'), ArrayType(['string'])]
    public ?array $outputIds;

    /**
     * @var ?array<string> $inputIds A list of unique IDs for the input files submitted with the task. If the task was initiated with the `destroy` parameter set to `true`, `inputIds` will not be generated.
     */
    #[JsonProperty('inputIds'), ArrayType(['string'])]
    public ?array $inputIds;

    /**
     * @var ?string $error The error code for the PDF Task. This is included only if the task fails.
     */
    #[JsonProperty('error')]
    public ?string $error;

    /**
     * @var ?string $message A descriptive message indicating the reason for task failure. This is included only if the task fails.
     */
    #[JsonProperty('message')]
    public ?string $message;

    /**
     * @var ?DateTime $expiresAt The timestamp when the task status will expire and be removed from the system, formatted as 'yyyy-MM-dd HH:mm:ss'.
     */
    #[JsonProperty('expiresAt'), Date(Date::TYPE_DATETIME)]
    public ?DateTime $expiresAt;

    /**
     * @param array{
     *   taskId: string,
     *   status: string,
     *   createdAt: DateTime,
     *   zipOutputUrl?: ?string,
     *   zipFileId?: ?string,
     *   outputUrls?: ?array<string>,
     *   outputIds?: ?array<string>,
     *   inputIds?: ?array<string>,
     *   error?: ?string,
     *   message?: ?string,
     *   expiresAt?: ?DateTime,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->taskId = $values['taskId'];
        $this->status = $values['status'];
        $this->createdAt = $values['createdAt'];
        $this->zipOutputUrl = $values['zipOutputUrl'] ?? null;
        $this->zipFileId = $values['zipFileId'] ?? null;
        $this->outputUrls = $values['outputUrls'] ?? null;
        $this->outputIds = $values['outputIds'] ?? null;
        $this->inputIds = $values['inputIds'] ?? null;
        $this->error = $values['error'] ?? null;
        $this->message = $values['message'] ?? null;
        $this->expiresAt = $values['expiresAt'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
