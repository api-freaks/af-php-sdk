<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;

class GrammarCorrectResponse extends JsonSerializableType
{
    /**
     * @var string $grammarCorrection The fully corrected text
     */
    #[JsonProperty('grammar_correction')]
    public string $grammarCorrection;

    /**
     * @param array{
     *   grammarCorrection: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->grammarCorrection = $values['grammarCorrection'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
