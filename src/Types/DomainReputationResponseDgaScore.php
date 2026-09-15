<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;

/**
 * Domain Generation Algorithm (DGA) detection results.
 */
class DomainReputationResponseDgaScore extends JsonSerializableType
{
    /**
     * @var float $score DGA likelihood score (0-1).
     */
    #[JsonProperty('score')]
    public float $score;

    /**
     * @var bool $isDga Indicates whether the domain is likely DGA-generated.
     */
    #[JsonProperty('is_dga')]
    public bool $isDga;

    /**
     * @var string $model Model used to compute the DGA score.
     */
    #[JsonProperty('model')]
    public string $model;

    /**
     * @var DomainReputationResponseDgaScoreFeatures $features Underlying lexical / statistical features used in DGA detection.
     */
    #[JsonProperty('features')]
    public DomainReputationResponseDgaScoreFeatures $features;

    /**
     * @var string $interpretation Human-readable interpretation of the DGA score.
     */
    #[JsonProperty('interpretation')]
    public string $interpretation;

    /**
     * @param array{
     *   score: float,
     *   isDga: bool,
     *   model: string,
     *   features: DomainReputationResponseDgaScoreFeatures,
     *   interpretation: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->score = $values['score'];
        $this->isDga = $values['isDga'];
        $this->model = $values['model'];
        $this->features = $values['features'];
        $this->interpretation = $values['interpretation'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
