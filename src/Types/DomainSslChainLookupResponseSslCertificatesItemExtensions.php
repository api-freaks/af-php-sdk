<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;
use Apifreaks\Core\Types\ArrayType;

class DomainSslChainLookupResponseSslCertificatesItemExtensions extends JsonSerializableType
{
    /**
     * @var string $authorityKeyIdentifier
     */
    #[JsonProperty('authorityKeyIdentifier')]
    public string $authorityKeyIdentifier;

    /**
     * @var string $subjectKeyIdentifier
     */
    #[JsonProperty('subjectKeyIdentifier')]
    public string $subjectKeyIdentifier;

    /**
     * @var array<string> $keyUsages
     */
    #[JsonProperty('keyUsages'), ArrayType(['string'])]
    public array $keyUsages;

    /**
     * @var array<string> $extendedKeyUsages
     */
    #[JsonProperty('extendedKeyUsages'), ArrayType(['string'])]
    public array $extendedKeyUsages;

    /**
     * @var ?array<string> $crlDistributionPoints
     */
    #[JsonProperty('crlDistributionPoints'), ArrayType(['string'])]
    public ?array $crlDistributionPoints;

    /**
     * @var DomainSslChainLookupResponseSslCertificatesItemExtensionsAuthorityInfoAccess $authorityInfoAccess
     */
    #[JsonProperty('authorityInfoAccess')]
    public DomainSslChainLookupResponseSslCertificatesItemExtensionsAuthorityInfoAccess $authorityInfoAccess;

    /**
     * @var ?DomainSslChainLookupResponseSslCertificatesItemExtensionsSubjectAlternativeNames $subjectAlternativeNames
     */
    #[JsonProperty('subjectAlternativeNames')]
    public ?DomainSslChainLookupResponseSslCertificatesItemExtensionsSubjectAlternativeNames $subjectAlternativeNames;

    /**
     * @var DomainSslChainLookupResponseSslCertificatesItemExtensionsCertificatePolicies $certificatePolicies
     */
    #[JsonProperty('certificatePolicies')]
    public DomainSslChainLookupResponseSslCertificatesItemExtensionsCertificatePolicies $certificatePolicies;

    /**
     * @param array{
     *   authorityKeyIdentifier: string,
     *   subjectKeyIdentifier: string,
     *   keyUsages: array<string>,
     *   extendedKeyUsages: array<string>,
     *   authorityInfoAccess: DomainSslChainLookupResponseSslCertificatesItemExtensionsAuthorityInfoAccess,
     *   certificatePolicies: DomainSslChainLookupResponseSslCertificatesItemExtensionsCertificatePolicies,
     *   crlDistributionPoints?: ?array<string>,
     *   subjectAlternativeNames?: ?DomainSslChainLookupResponseSslCertificatesItemExtensionsSubjectAlternativeNames,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->authorityKeyIdentifier = $values['authorityKeyIdentifier'];
        $this->subjectKeyIdentifier = $values['subjectKeyIdentifier'];
        $this->keyUsages = $values['keyUsages'];
        $this->extendedKeyUsages = $values['extendedKeyUsages'];
        $this->crlDistributionPoints = $values['crlDistributionPoints'] ?? null;
        $this->authorityInfoAccess = $values['authorityInfoAccess'];
        $this->subjectAlternativeNames = $values['subjectAlternativeNames'] ?? null;
        $this->certificatePolicies = $values['certificatePolicies'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
