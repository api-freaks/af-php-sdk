<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;

class PdfUploadBinaryResponse extends JsonSerializableType
{
    /**
     * @var ?string $fileName The name of the uploaded file.
     */
    #[JsonProperty('fileName')]
    public ?string $fileName;

    /**
     * @var string $fileId The unique identifier assigned to the uploaded file.
     */
    #[JsonProperty('fileId')]
    public string $fileId;

    /**
     * @param array{
     *   fileId: string,
     *   fileName?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->fileName = $values['fileName'] ?? null;
        $this->fileId = $values['fileId'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
