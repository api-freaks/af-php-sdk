<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;

class DomainSslLookupResponseSslCertificatesItemExtensionsCertificatePoliciesPolicyQualifierUserNotice extends JsonSerializableType
{
    /**
     * @var ?string $explicitText
     */
    #[JsonProperty('explicitText')]
    public ?string $explicitText;

    /**
     * @var ?DomainSslLookupResponseSslCertificatesItemExtensionsCertificatePoliciesPolicyQualifierUserNoticeNoticeRef $noticeRef
     */
    #[JsonProperty('noticeRef')]
    public ?DomainSslLookupResponseSslCertificatesItemExtensionsCertificatePoliciesPolicyQualifierUserNoticeNoticeRef $noticeRef;

    /**
     * @param array{
     *   explicitText?: ?string,
     *   noticeRef?: ?DomainSslLookupResponseSslCertificatesItemExtensionsCertificatePoliciesPolicyQualifierUserNoticeNoticeRef,
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
