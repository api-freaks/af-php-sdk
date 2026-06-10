<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;

class DomainSslChainLookupResponseSslCertificatesItemExtensionsCertificatePoliciesPolicyQualifierUserNotice extends JsonSerializableType
{
    /**
     * @var ?string $explicitText
     */
    #[JsonProperty('explicitText')]
    public ?string $explicitText;

    /**
     * @var ?DomainSslChainLookupResponseSslCertificatesItemExtensionsCertificatePoliciesPolicyQualifierUserNoticeNoticeRef $noticeRef
     */
    #[JsonProperty('noticeRef')]
    public ?DomainSslChainLookupResponseSslCertificatesItemExtensionsCertificatePoliciesPolicyQualifierUserNoticeNoticeRef $noticeRef;

    /**
     * @param array{
     *   explicitText?: ?string,
     *   noticeRef?: ?DomainSslChainLookupResponseSslCertificatesItemExtensionsCertificatePoliciesPolicyQualifierUserNoticeNoticeRef,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->explicitText = $values['explicitText'] ?? null;
        $this->noticeRef = $values['noticeRef'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
