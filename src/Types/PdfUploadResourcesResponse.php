<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;
use Apifreaks\Core\Types\ArrayType;

class PdfUploadResourcesResponse extends JsonSerializableType
{
    /**
     * @var array<PdfUploadResourcesResponseFilesItem> $files
     */
    #[JsonProperty('files'), ArrayType([PdfUploadResourcesResponseFilesItem::class])]
    public array $files;

    /**
     * @param array{
     *   files: array<PdfUploadResourcesResponseFilesItem>,
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
