<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;

/**
 * A single trust signal contributing to the trust score.
 */
class DomainReputationResponseTrustSignalsSignalsPositiveItem extends JsonSerializableType
{
    /**
     * @var string $code Signal code identifier (e.g. valid_ssl, dmarc_missing).
     */
    #[JsonProperty('code')]
    public string $code;

    /**
     * @var int $weight Weight assigned to the signal.
     */
    #[JsonProperty('weight')]
    public int $weight;

    /**
     * @var value-of<DomainReputationResponseTrustSignalsSignalsPositiveItemPolarity> $polarity Polarity of the signal.
     */
    #[JsonProperty('polarity')]
    public string $polarity;

    /**
     * @var string $category Category the signal belongs to (e.g. ssl_certificate).
     */
    #[JsonProperty('category')]
    public string $category;

    /**
     * @var string $evidence Evidence supporting the signal.
     */
    #[JsonProperty('evidence')]
    public string $evidence;

    /**
     * @var float $confidence Confidence score for the signal (0-1).
     */
    #[JsonProperty('confidence')]
    public float $confidence;

    /**
     * @param array{
     *   code: string,
     *   weight: int,
     *   polarity: value-of<DomainReputationResponseTrustSignalsSignalsPositiveItemPolarity>,
     *   category: string,
     *   evidence: string,
     *   confidence: float,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->code = $values['code'];
        $this->weight = $values['weight'];
        $this->polarity = $values['polarity'];
        $this->category = $values['category'];
        $this->evidence = $values['evidence'];
        $this->confidence = $values['confidence'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
