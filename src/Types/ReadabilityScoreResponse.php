<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;
use Apifreaks\Core\Types\ArrayType;

class ReadabilityScoreResponse extends JsonSerializableType
{
    /**
     * @var ?ReadabilityScoreResponseReadabilityScores $readabilityScores Standard readability formula scores, keyed by metric name. Metrics that cannot be computed for the supplied text are omitted.
     */
    #[JsonProperty('readability_scores')]
    public ?ReadabilityScoreResponseReadabilityScores $readabilityScores;

    /**
     * @var ?array<ReadabilityScoreResponseSentenceReadabilityItem> $sentenceReadability Per-sentence readability breakdown
     */
    #[JsonProperty('sentence_readability'), ArrayType([ReadabilityScoreResponseSentenceReadabilityItem::class])]
    public ?array $sentenceReadability;

    /**
     * @var ?float $readabilityGrade Overall readability grade, calculated as the average of sentence readability scores
     */
    #[JsonProperty('readability_grade')]
    public ?float $readabilityGrade;

    /**
     * @param array{
     *   readabilityScores?: ?ReadabilityScoreResponseReadabilityScores,
     *   sentenceReadability?: ?array<ReadabilityScoreResponseSentenceReadabilityItem>,
     *   readabilityGrade?: ?float,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->readabilityScores = $values['readabilityScores'] ?? null;
        $this->sentenceReadability = $values['sentenceReadability'] ?? null;
        $this->readabilityGrade = $values['readabilityGrade'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
