<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;
use Apifreaks\Core\Types\ArrayType;

class PdfListFilesResponse extends JsonSerializableType
{
    /**
     * @var array<PdfListFilesResponseFilesItem> $files
     */
    #[JsonProperty('files'), ArrayType([PdfListFilesResponseFilesItem::class])]
    public array $files;

    /**
     * @param array{
     *   files: array<PdfListFilesResponseFilesItem>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->files = $values['files'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
