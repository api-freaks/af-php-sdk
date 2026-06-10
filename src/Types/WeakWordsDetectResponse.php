<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;
use Apifreaks\Core\Types\ArrayType;

class WeakWordsDetectResponse extends JsonSerializableType
{
    /**
     * @var array<WeakWordsDetectResponseWeakWordsItem> $weakWords List of detected weak words
     */
    #[JsonProperty('weak_words'), ArrayType([WeakWordsDetectResponseWeakWordsItem::class])]
    public array $weakWords;

    /**
     * @param array{
     *   weakWords: array<WeakWordsDetectResponseWeakWordsItem>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->weakWords = $values['weakWords'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
