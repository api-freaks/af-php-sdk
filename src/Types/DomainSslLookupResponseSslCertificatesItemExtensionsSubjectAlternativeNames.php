<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;
use Apifreaks\Core\Types\ArrayType;

class DomainSslLookupResponseSslCertificatesItemExtensionsSubjectAlternativeNames extends JsonSerializableType
{
    /**
     * @var ?array<string> $dnsNames
     */
    #[JsonProperty('dnsNames'), ArrayType(['string'])]
    public ?array $dnsNames;

    /**
     * @var ?array<string> $emailAddresses
     */
    #[JsonProperty('emailAddresses'), ArrayType(['string'])]
    public ?array $emailAddresses;

    /**
     * @var ?array<string> $ipAddresses
     */
    #[JsonProperty('ipAddresses'), ArrayType(['string'])]
    public ?array $ipAddresses;

    /**
     * @var ?array<string> $uris
     */
    #[JsonProperty('uris'), ArrayType(['string'])]
    public ?array $uris;

    /**
     * @param array{
     *   dnsNames?: ?array<string>,
     *   emailAddresses?: ?array<string>,
     *   ipAddresses?: ?array<string>,
     *   uris?: ?array<string>,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->dnsNames = $values['dnsNames'] ?? null;
        $this->emailAddresses = $values['emailAddresses'] ?? null;
        $this->ipAddresses = $values['ipAddresses'] ?? null;
        $this->uris = $values['uris'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
