<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;

/**
 * Email authentication mechanisms configured for the domain.
 */
class DomainReputationResponseEmailDeliverabilityAuthentication extends JsonSerializableType
{
    /**
     * @var DomainReputationResponseEmailDeliverabilityAuthenticationSpf $spf Sender Policy Framework configuration.
     */
    #[JsonProperty('spf')]
    public DomainReputationResponseEmailDeliverabilityAuthenticationSpf $spf;

    /**
     * @var DomainReputationResponseEmailDeliverabilityAuthenticationDkim $dkim DomainKeys Identified Mail configuration.
     */
    #[JsonProperty('dkim')]
    public DomainReputationResponseEmailDeliverabilityAuthenticationDkim $dkim;

    /**
     * @var DomainReputationResponseEmailDeliverabilityAuthenticationDmarc $dmarc Domain-based Message Authentication, Reporting and Conformance configuration.
     */
    #[JsonProperty('dmarc')]
    public DomainReputationResponseEmailDeliverabilityAuthenticationDmarc $dmarc;

    /**
     * @param array{
     *   spf: DomainReputationResponseEmailDeliverabilityAuthenticationSpf,
     *   dkim: DomainReputationResponseEmailDeliverabilityAuthenticationDkim,
     *   dmarc: DomainReputationResponseEmailDeliverabilityAuthenticationDmarc,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->spf = $values['spf'];
        $this->dkim = $values['dkim'];
        $this->dmarc = $values['dmarc'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
