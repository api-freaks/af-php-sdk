<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;
use Apifreaks\Core\Types\ArrayType;

class DomainSslLookupResponseSslCertificatesItemExtensionsAuthorityInfoAccess extends JsonSerializableType
{
    /**
     * @var array<string> $issuers
     */
    #[JsonProperty('issuers'), ArrayType(['string'])]
    public array $issuers;

    /**
     * @var array<string> $ocsp
     */
    #[JsonProperty('ocsp'), ArrayType(['string'])]
    public array $ocsp;

    /**
     * @param array{
     *   issuers: array<string>,
     *   ocsp: array<string>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->issuers = $values['issuers'];
        $this->ocsp = $values['ocsp'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
