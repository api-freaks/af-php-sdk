<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;
use Apifreaks\Core\Types\ArrayType;

/**
 * Summary of reasons behind the risk assessment.
 */
class DomainReputationResponseEvidenceSummary extends JsonSerializableType
{
    /**
     * @var array<string> $whyFlagged List of reasons why the domain was flagged. Empty for a clean domain.
     */
    #[JsonProperty('why_flagged'), ArrayType(['string'])]
    public array $whyFlagged;

    /**
     * @param array{
     *   whyFlagged: array<string>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->whyFlagged = $values['whyFlagged'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
