<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;
use Apifreaks\Core\Types\ArrayType;

/**
 * DNS records for the email domain. Omitted entirely when validSyntax is false or the domain does not exist (NXDOMAIN).
 */
class BulkDisposableEmailCheckV2ResponseDisposableEmailResponseItemDns extends JsonSerializableType
{
    /**
     * @var ?array<string> $mxRecord Every MX hostname at the domain's lowest preference (not just one). ["."]  means the domain publishes a null MX and accepts no mail at all. Absent entirely when the domain has no MX record of any kind — check aRecord in that case.
     */
    #[JsonProperty('mxRecord'), ArrayType(['string'])]
    public ?array $mxRecord;

    /**
     * @var ?array<string> $aRecord Collection of A (Address) records for the domain. Present when the domain has no MX record but does resolve to a web server or other host.
     */
    #[JsonProperty('aRecord'), ArrayType(['string'])]
    public ?array $aRecord;

    /**
     * @param array{
     *   mxRecord?: ?array<string>,
     *   aRecord?: ?array<string>,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->mxRecord = $values['mxRecord'] ?? null;
        $this->aRecord = $values['aRecord'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
