<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;

class PdfDeleteFileResponse extends JsonSerializableType
{
    /**
     * @var string $fileId The unique identifier of the file.
     */
    #[JsonProperty('fileId')]
    public string $fileId;

    /**
     * @var bool $success Indicates whether the file deletion request was successful.
     */
    #[JsonProperty('success')]
    public bool $success;

    /**
     * @var string $message A message indicating the result of the file deletion request.
     */
    #[JsonProperty('message')]
    public string $message;

    /**
     * @param array{
     *   fileId: string,
     *   success: bool,
     *   message: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->fileId = $values['fileId'];
        $this->success = $values['success'];
        $this->message = $values['message'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
