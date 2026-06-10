<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;
use Apifreaks\Core\Types\ArrayType;

class GrammarDetectResponse extends JsonSerializableType
{
    /**
     * @var array<GrammarDetectResponseGrammarErrorsItem> $grammarErrors List of words flagged as grammatically incorrect
     */
    #[JsonProperty('grammar_errors'), ArrayType([GrammarDetectResponseGrammarErrorsItem::class])]
    public array $grammarErrors;

    /**
     * @param array{
     *   grammarErrors: array<GrammarDetectResponseGrammarErrorsItem>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->grammarErrors = $values['grammarErrors'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
