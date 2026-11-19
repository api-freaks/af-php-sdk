<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;
use Apifreaks\Core\Types\ArrayType;

/**
 * The API returns an empty object `{}` when no extract instruction matched anything.
 */
class WebScrapeResponse extends JsonSerializableType
{
    /**
     * @var ?array<string, mixed> $extractedData Extracted data based on the extract instructions. Absent when nothing was extracted.
     */
    #[JsonProperty('extractedData'), ArrayType(['string' => 'mixed'])]
    public ?array $extractedData;

    /**
     * @param array{
     *   extractedData?: ?array<string, mixed>,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->extractedData = $values['extractedData'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
