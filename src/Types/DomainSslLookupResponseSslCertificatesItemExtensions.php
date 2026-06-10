<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;
use Apifreaks\Core\Types\ArrayType;

class DomainSslLookupResponseSslCertificatesItemExtensions extends JsonSerializableType
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
     * @var DomainSslLookupResponseSslCertificatesItemExtensionsAuthorityInfoAccess $authorityInfoAccess
     */
    #[JsonProperty('authorityInfoAccess')]
    public DomainSslLookupResponseSslCertificatesItemExtensionsAuthorityInfoAccess $authorityInfoAccess;

    /**
     * @var ?DomainSslLookupResponseSslCertificatesItemExtensionsSubjectAlternativeNames $subjectAlternativeNames
     */
    #[JsonProperty('subjectAlternativeNames')]
    public ?DomainSslLookupResponseSslCertificatesItemExtensionsSubjectAlternativeNames $subjectAlternativeNames;

    /**
     * @var DomainSslLookupResponseSslCertificatesItemExtensionsCertificatePolicies $certificatePolicies
     */
    #[JsonProperty('certificatePolicies')]
    public DomainSslLookupResponseSslCertificatesItemExtensionsCertificatePolicies $certificatePolicies;

    /**
     * @param array{
     *   authorityKeyIdentifier: string,
     *   subjectKeyIdentifier: string,
     *   keyUsages: array<string>,
     *   extendedKeyUsages: array<string>,
     *   authorityInfoAccess: DomainSslLookupResponseSslCertificatesItemExtensionsAuthorityInfoAccess,
     *   certificatePolicies: DomainSslLookupResponseSslCertificatesItemExtensionsCertificatePolicies,
     *   crlDistributionPoints?: ?array<string>,
     *   subjectAlternativeNames?: ?DomainSslLookupResponseSslCertificatesItemExtensionsSubjectAlternativeNames,
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
