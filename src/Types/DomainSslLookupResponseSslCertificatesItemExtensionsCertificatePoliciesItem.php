<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;

class DomainSslLookupResponseSslCertificatesItemExtensionsCertificatePoliciesItem extends JsonSerializableType
{
    /**
     * @var string $policyId Policy identifier
     */
    #[JsonProperty('policyId')]
    public string $policyId;

    /**
     * @var ?DomainSslLookupResponseSslCertificatesItemExtensionsCertificatePoliciesItemPolicyQualifier $policyQualifier Policy qualifier details
     */
    #[JsonProperty('policyQualifier')]
    public ?DomainSslLookupResponseSslCertificatesItemExtensionsCertificatePoliciesItemPolicyQualifier $policyQualifier;

    /**
     * @param array{
     *   policyId: string,
     *   policyQualifier?: ?DomainSslLookupResponseSslCertificatesItemExtensionsCertificatePoliciesItemPolicyQualifier,
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
