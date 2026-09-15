<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;

/**
 * Underlying lexical / statistical features used in DGA detection.
 */
class DomainReputationResponseDgaScoreFeatures extends JsonSerializableType
{
    /**
     * @var int $domainLength Length of the domain name.
     */
    #[JsonProperty('domain_length')]
    public int $domainLength;

    /**
     * @var float $vowelConsonantRatio Ratio of vowels to consonants in the domain.
     */
    #[JsonProperty('vowel_consonant_ratio')]
    public float $vowelConsonantRatio;

    /**
     * @var float $ngramPerplexity N-gram perplexity score of the domain string.
     */
    #[JsonProperty('ngram_perplexity')]
    public float $ngramPerplexity;

    /**
     * @var float $shannonEntropy Shannon entropy of the domain string.
     */
    #[JsonProperty('shannon_entropy')]
    public float $shannonEntropy;

    /**
     * @var float $digitLetterRatio Ratio of digits to letters in the domain.
     */
    #[JsonProperty('digit_letter_ratio')]
    public float $digitLetterRatio;

    /**
     * @var int $consonantStreakMax Maximum consecutive consonant streak in the domain.
     */
    #[JsonProperty('consonant_streak_max')]
    public int $consonantStreakMax;

    /**
     * @var bool $tldInKnownDgaSet Indicates if the TLD belongs to a known DGA set.
     */
    #[JsonProperty('tld_in_known_dga_set')]
    public bool $tldInKnownDgaSet;

    /**
     * @param array{
     *   domainLength: int,
     *   vowelConsonantRatio: float,
     *   ngramPerplexity: float,
     *   shannonEntropy: float,
     *   digitLetterRatio: float,
     *   consonantStreakMax: int,
     *   tldInKnownDgaSet: bool,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->domainLength = $values['domainLength'];
        $this->vowelConsonantRatio = $values['vowelConsonantRatio'];
        $this->ngramPerplexity = $values['ngramPerplexity'];
        $this->shannonEntropy = $values['shannonEntropy'];
        $this->digitLetterRatio = $values['digitLetterRatio'];
        $this->consonantStreakMax = $values['consonantStreakMax'];
        $this->tldInKnownDgaSet = $values['tldInKnownDgaSet'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
