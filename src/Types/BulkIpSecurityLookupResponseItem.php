<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;

class BulkIpSecurityLookupResponseItem extends JsonSerializableType
{
    /**
     * @var ?string $ip
     */
    #[JsonProperty('ip')]
    public ?string $ip;

    /**
     * @var ?BulkIpSecurityLookupResponseItemSecurity $security
     */
    #[JsonProperty('security')]
    public ?BulkIpSecurityLookupResponseItemSecurity $security;

    /**
     * @param array{
     *   ip?: ?string,
     *   security?: ?BulkIpSecurityLookupResponseItemSecurity,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->ip = $values['ip'] ?? null;
        $this->security = $values['security'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
