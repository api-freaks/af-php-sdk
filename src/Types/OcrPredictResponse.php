<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;
use Apifreaks\Core\Types\Union;

class OcrPredictResponse extends JsonSerializableType
{
    /**
     * Array containing extracted text. Structure varies based on input type and new_line parameter:
     * - Single file, new_line=0: Array with single string element
     * - Single file, new_line=1: Array of strings (one per line)
     * - Bulk/ZIP file, new_line=0: Array of strings (one per file)
     * - Bulk/ZIP file, new_line=1: Array of arrays (each inner array contains lines for respective file)
     *
     * @var (
     *    array<string>
     *   |array<array<string>>
     * ) $ocrText
     */
    #[JsonProperty('OCRText'), Union(['string'], [['string']])]
    public array $ocrText;

    /**
     * @param array{
     *   ocrText: (
     *    array<string>
     *   |array<array<string>>
     * ),
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->ocrText = $values['ocrText'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
