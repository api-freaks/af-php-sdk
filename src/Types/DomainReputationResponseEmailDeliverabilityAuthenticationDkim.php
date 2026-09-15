<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;
use Apifreaks\Core\Types\ArrayType;

/**
 * DomainKeys Identified Mail configuration.
 */
class DomainReputationResponseEmailDeliverabilityAuthenticationDkim extends JsonSerializableType
{
    /**
     * @var bool $found Indicates whether a DKIM record was found for any probed selector.
     */
    #[JsonProperty('found')]
    public bool $found;

    /**
     * @var array<string> $selectorsFound List of DKIM selectors for which a record was found.
     */
    #[JsonProperty('selectors_found'), ArrayType(['string'])]
    public array $selectorsFound;

    /**
     * @var array<string> $providersDetected Email service providers inferred from the matched DKIM selectors.
     */
    #[JsonProperty('providers_detected'), ArrayType(['string'])]
    public array $providersDetected;

    /**
     * @var string $note Clarifying note about the limitations of DKIM selector probing.
     */
    #[JsonProperty('note')]
    public string $note;

    /**
     * @param array{
     *   found: bool,
     *   selectorsFound: array<string>,
     *   providersDetected: array<string>,
     *   note: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->found = $values['found'];
        $this->selectorsFound = $values['selectorsFound'];
        $this->providersDetected = $values['providersDetected'];
        $this->note = $values['note'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
