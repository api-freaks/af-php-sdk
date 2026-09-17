<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;

class DomainSslChainLookupResponseSslCertificatesItemExtensionsCertificatePoliciesItemPolicyQualifierUserNotice extends JsonSerializableType
{
    /**
     * @var ?string $explicitText Explicit text notice
     */
    #[JsonProperty('explicitText')]
    public ?string $explicitText;

    /**
     * @var ?DomainSslChainLookupResponseSslCertificatesItemExtensionsCertificatePoliciesItemPolicyQualifierUserNoticeNoticeRef $noticeRef
     */
    #[JsonProperty('noticeRef')]
    public ?DomainSslChainLookupResponseSslCertificatesItemExtensionsCertificatePoliciesItemPolicyQualifierUserNoticeNoticeRef $noticeRef;

    /**
     * @param array{
     *   explicitText?: ?string,
     *   noticeRef?: ?DomainSslChainLookupResponseSslCertificatesItemExtensionsCertificatePoliciesItemPolicyQualifierUserNoticeNoticeRef,
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
