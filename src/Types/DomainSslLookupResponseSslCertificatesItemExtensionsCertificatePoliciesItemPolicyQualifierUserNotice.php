<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;

class DomainSslLookupResponseSslCertificatesItemExtensionsCertificatePoliciesItemPolicyQualifierUserNotice extends JsonSerializableType
{
    /**
     * @var ?string $explicitText Explicit text notice
     */
    #[JsonProperty('explicitText')]
    public ?string $explicitText;

    /**
     * @var ?DomainSslLookupResponseSslCertificatesItemExtensionsCertificatePoliciesItemPolicyQualifierUserNoticeNoticeRef $noticeRef
     */
    #[JsonProperty('noticeRef')]
    public ?DomainSslLookupResponseSslCertificatesItemExtensionsCertificatePoliciesItemPolicyQualifierUserNoticeNoticeRef $noticeRef;

    /**
     * @param array{
     *   explicitText?: ?string,
     *   noticeRef?: ?DomainSslLookupResponseSslCertificatesItemExtensionsCertificatePoliciesItemPolicyQualifierUserNoticeNoticeRef,
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
