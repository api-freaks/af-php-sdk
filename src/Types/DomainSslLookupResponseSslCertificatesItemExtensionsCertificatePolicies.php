<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;

class DomainSslLookupResponseSslCertificatesItemExtensionsCertificatePolicies extends JsonSerializableType
{
    /**
     * @var string $policyId
     */
    #[JsonProperty('policyId')]
    public string $policyId;

    /**
     * @var ?DomainSslLookupResponseSslCertificatesItemExtensionsCertificatePoliciesPolicyQualifier $policyQualifier
     */
    #[JsonProperty('policyQualifier')]
    public ?DomainSslLookupResponseSslCertificatesItemExtensionsCertificatePoliciesPolicyQualifier $policyQualifier;

    /**
     * @param array{
     *   policyId: string,
     *   policyQualifier?: ?DomainSslLookupResponseSslCertificatesItemExtensionsCertificatePoliciesPolicyQualifier,
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
