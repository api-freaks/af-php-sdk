<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;

class DomainSslChainLookupResponseSslCertificatesItemExtensionsCertificatePoliciesPolicyQualifier extends JsonSerializableType
{
    /**
     * @var ?string $oid
     */
    #[JsonProperty('oid')]
    public ?string $oid;

    /**
     * @var ?string $cpsUri
     */
    #[JsonProperty('cpsUri')]
    public ?string $cpsUri;

    /**
     * @var ?DomainSslChainLookupResponseSslCertificatesItemExtensionsCertificatePoliciesPolicyQualifierUserNotice $userNotice
     */
    #[JsonProperty('userNotice')]
    public ?DomainSslChainLookupResponseSslCertificatesItemExtensionsCertificatePoliciesPolicyQualifierUserNotice $userNotice;

    /**
     * @param array{
     *   oid?: ?string,
     *   cpsUri?: ?string,
     *   userNotice?: ?DomainSslChainLookupResponseSslCertificatesItemExtensionsCertificatePoliciesPolicyQualifierUserNotice,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->oid = $values['oid'] ?? null;
        $this->cpsUri = $values['cpsUri'] ?? null;
        $this->userNotice = $values['userNotice'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
