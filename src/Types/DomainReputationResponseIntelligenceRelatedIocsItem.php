<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;

/**
 * A related indicator of compromise.
 */
class DomainReputationResponseIntelligenceRelatedIocsItem extends JsonSerializableType
{
    /**
     * @var string $type Type of the related IOC (e.g. ipv4, ipv6).
     */
    #[JsonProperty('type')]
    public string $type;

    /**
     * @var string $value Value of the related IOC.
     */
    #[JsonProperty('value')]
    public string $value;

    /**
     * @var float $confidence Confidence score for the related IOC (0-1).
     */
    #[JsonProperty('confidence')]
    public float $confidence;

    /**
     * @param array{
     *   type: string,
     *   value: string,
     *   confidence: float,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->type = $values['type'];
        $this->value = $values['value'];
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
