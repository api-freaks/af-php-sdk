<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;

class ReadabilityScoreResponseSentenceReadabilityItem extends JsonSerializableType
{
    /**
     * @var ?string $sentence The sentence text
     */
    #[JsonProperty('sentence')]
    public ?string $sentence;

    /**
     * @var ?float $readabilityGrade Readability grade for the sentence
     */
    #[JsonProperty('readability_grade')]
    public ?float $readabilityGrade;

    /**
     * @var ?value-of<ReadabilityScoreResponseSentenceReadabilityItemReadabilityLevel> $readabilityLevel Difficulty level for the sentence based on the target audience
     */
    #[JsonProperty('readability_level')]
    public ?string $readabilityLevel;

    /**
     * @param array{
     *   sentence?: ?string,
     *   readabilityGrade?: ?float,
     *   readabilityLevel?: ?value-of<ReadabilityScoreResponseSentenceReadabilityItemReadabilityLevel>,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->sentence = $values['sentence'] ?? null;
        $this->readabilityGrade = $values['readabilityGrade'] ?? null;
        $this->readabilityLevel = $values['readabilityLevel'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
