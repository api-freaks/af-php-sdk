<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;
use Apifreaks\Core\Types\ArrayType;

class PdfCompressResponse extends JsonSerializableType
{
    /**
     * @var string $taskId Task id of the requested task which can be used to check the task status
     */
    #[JsonProperty('taskId')]
    public string $taskId;

    /**
     * @var ?array<string> $inputIds File Ids for the input files provided for the task. Not given with destroy param.
     */
    #[JsonProperty('inputIds'), ArrayType(['string'])]
    public ?array $inputIds;

    /**
     * @param array{
     *   taskId: string,
     *   inputIds?: ?array<string>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->taskId = $values['taskId'];
        $this->inputIds = $values['inputIds'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
