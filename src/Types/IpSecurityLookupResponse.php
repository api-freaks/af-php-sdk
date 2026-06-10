<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;

class IpSecurityLookupResponse extends JsonSerializableType
{
    /**
     * @var ?string $ip
     */
    #[JsonProperty('ip')]
    public ?string $ip;

    /**
     * @var ?IpSecurityLookupResponseSecurity $security
     */
    #[JsonProperty('security')]
    public ?IpSecurityLookupResponseSecurity $security;

    /**
     * @param array{
     *   ip?: ?string,
     *   security?: ?IpSecurityLookupResponseSecurity,
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
