<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;

/**
 * Flesch Reading Ease
 */
class ReadabilityScoreResponseReadabilityScoresFleschReadingEase extends JsonSerializableType
{
    /**
     * @var ?float $score The metric score
     */
    #[JsonProperty('score')]
    public ?float $score;

    /**
     * @var ?string $level Human-readable difficulty level for that metric
     */
    #[JsonProperty('level')]
    public ?string $level;

    /**
     * @param array{
     *   score?: ?float,
     *   level?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->score = $values['score'] ?? null;
        $this->level = $values['level'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
