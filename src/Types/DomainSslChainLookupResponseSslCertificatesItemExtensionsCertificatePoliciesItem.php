<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;

class DomainSslChainLookupResponseSslCertificatesItemExtensionsCertificatePoliciesItem extends JsonSerializableType
{
    /**
     * @var string $policyId Policy identifier
     */
    #[JsonProperty('policyId')]
    public string $policyId;

    /**
     * @var ?DomainSslChainLookupResponseSslCertificatesItemExtensionsCertificatePoliciesItemPolicyQualifier $policyQualifier Policy qualifier details
     */
    #[JsonProperty('policyQualifier')]
    public ?DomainSslChainLookupResponseSslCertificatesItemExtensionsCertificatePoliciesItemPolicyQualifier $policyQualifier;

    /**
     * @param array{
     *   policyId: string,
     *   policyQualifier?: ?DomainSslChainLookupResponseSslCertificatesItemExtensionsCertificatePoliciesItemPolicyQualifier,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->policyId = $values['policyId'];
        $this->policyQualifier = $values['policyQualifier'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
