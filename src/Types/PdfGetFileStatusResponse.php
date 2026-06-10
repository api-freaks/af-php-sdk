<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;
use DateTime;
use Apifreaks\Core\Types\Date;

class PdfGetFileStatusResponse extends JsonSerializableType
{
    /**
     * @var string $fileId The unique identifier of the file.
     */
    #[JsonProperty('fileId')]
    public string $fileId;

    /**
     * @var ?string $fileName The name of the file.
     */
    #[JsonProperty('fileName')]
    public ?string $fileName;

    /**
     * @var ?string $fileType The type of the file (e.g., 'pdf').
     */
    #[JsonProperty('fileType')]
    public ?string $fileType;

    /**
     * @var DateTime $fileCreationTime The timestamp when the file was created.
     */
    #[JsonProperty('fileCreationTime'), Date(Date::TYPE_DATETIME)]
    public DateTime $fileCreationTime;

    /**
     * @var ?DateTime $fileDeletionTime Date on which the file is scheduled to be deleted, in UTC.
     */
    #[JsonProperty('fileDeletionTime'), Date(Date::TYPE_DATE)]
    public ?DateTime $fileDeletionTime;

    /**
     * @param array{
     *   fileId: string,
     *   fileCreationTime: DateTime,
     *   fileName?: ?string,
     *   fileType?: ?string,
     *   fileDeletionTime?: ?DateTime,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->fileId = $values['fileId'];
        $this->fileName = $values['fileName'] ?? null;
        $this->fileType = $values['fileType'] ?? null;
        $this->fileCreationTime = $values['fileCreationTime'];
        $this->fileDeletionTime = $values['fileDeletionTime'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
