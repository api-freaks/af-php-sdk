<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;

/**
 * Policy qualifier details
 */
class DomainSslLookupResponseSslCertificatesItemExtensionsCertificatePoliciesItemPolicyQualifier extends JsonSerializableType
{
    /**
     * @var ?string $oid Object identifier
     */
    #[JsonProperty('oid')]
    public ?string $oid;

    /**
     * @var ?string $cpsUri URI of the CPS
     */
    #[JsonProperty('cpsUri')]
    public ?string $cpsUri;

    /**
     * @var ?DomainSslLookupResponseSslCertificatesItemExtensionsCertificatePoliciesItemPolicyQualifierUserNotice $userNotice
     */
    #[JsonProperty('userNotice')]
    public ?DomainSslLookupResponseSslCertificatesItemExtensionsCertificatePoliciesItemPolicyQualifierUserNotice $userNotice;

    /**
     * @param array{
     *   oid?: ?string,
     *   cpsUri?: ?string,
     *   userNotice?: ?DomainSslLookupResponseSslCertificatesItemExtensionsCertificatePoliciesItemPolicyQualifierUserNotice,
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
