<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;
use DateTime;
use Apifreaks\Core\Types\Date;

class PdfListFilesResponseFilesItem extends JsonSerializableType
{
    /**
     * @var string $fileId
     */
    #[JsonProperty('fileId')]
    public string $fileId;

    /**
     * @var string $fileName
     */
    #[JsonProperty('fileName')]
    public string $fileName;

    /**
     * @var ?string $fileType
     */
    #[JsonProperty('fileType')]
    public ?string $fileType;

    /**
     * @var ?DateTime $fileCreationTime
     */
    #[JsonProperty('fileCreationTime'), Date(Date::TYPE_DATETIME)]
    public ?DateTime $fileCreationTime;

    /**
     * @var ?DateTime $fileDeletionTime
     */
    #[JsonProperty('fileDeletionTime'), Date(Date::TYPE_DATE)]
    public ?DateTime $fileDeletionTime;

    /**
     * @param array{
     *   fileId: string,
     *   fileName: string,
     *   fileType?: ?string,
     *   fileCreationTime?: ?DateTime,
     *   fileDeletionTime?: ?DateTime,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->fileId = $values['fileId'];
        $this->fileName = $values['fileName'];
        $this->fileType = $values['fileType'] ?? null;
        $this->fileCreationTime = $values['fileCreationTime'] ?? null;
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
