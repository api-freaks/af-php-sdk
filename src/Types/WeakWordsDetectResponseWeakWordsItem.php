<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;

class WeakWordsDetectResponseWeakWordsItem extends JsonSerializableType
{
    /**
     * @var string $word The detected weak word
     */
    #[JsonProperty('word')]
    public string $word;

    /**
     * @var int $offset Zero-based word position in the input text
     */
    #[JsonProperty('offset')]
    public int $offset;

    /**
     * @param array{
     *   word: string,
     *   offset: int,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->word = $values['word'];
        $this->offset = $values['offset'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
