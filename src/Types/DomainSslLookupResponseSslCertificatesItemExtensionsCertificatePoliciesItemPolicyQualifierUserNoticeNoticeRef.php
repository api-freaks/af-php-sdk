<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;

class DomainSslLookupResponseSslCertificatesItemExtensionsCertificatePoliciesItemPolicyQualifierUserNoticeNoticeRef extends JsonSerializableType
{
    /**
     * @var ?string $organization Organization providing the notice
     */
    #[JsonProperty('organization')]
    public ?string $organization;

    /**
     * @var ?string $noticeNumbers Notice numbers
     */
    #[JsonProperty('noticeNumbers')]
    public ?string $noticeNumbers;

    /**
     * @param array{
     *   organization?: ?string,
     *   noticeNumbers?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->organization = $values['organization'] ?? null;
        $this->noticeNumbers = $values['noticeNumbers'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
