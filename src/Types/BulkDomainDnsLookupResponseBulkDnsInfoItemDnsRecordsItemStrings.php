<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;
use Apifreaks\Core\Types\ArrayType;

class BulkDomainDnsLookupResponseBulkDnsInfoItemDnsRecordsItemStrings extends JsonSerializableType
{
    /**
     * @var string $name
     */
    #[JsonProperty('name')]
    public string $name;

    /**
     * @var int $type
     */
    #[JsonProperty('type')]
    public int $type;

    /**
     * @var value-of<BulkDomainDnsLookupResponseBulkDnsInfoItemDnsRecordsItemStringsDnsType> $dnsType
     */
    #[JsonProperty('dnsType')]
    public string $dnsType;

    /**
     * @var int $ttl
     */
    #[JsonProperty('ttl')]
    public int $ttl;

    /**
     * @var string $rawText
     */
    #[JsonProperty('rawText')]
    public string $rawText;

    /**
     * @var int $rRsetType
     */
    #[JsonProperty('rRsetType')]
    public int $rRsetType;

    /**
     * @var array<string> $strings
     */
    #[JsonProperty('strings'), ArrayType(['string'])]
    public array $strings;

    /**
     * @param array{
     *   name: string,
     *   type: int,
     *   dnsType: value-of<BulkDomainDnsLookupResponseBulkDnsInfoItemDnsRecordsItemStringsDnsType>,
     *   ttl: int,
     *   rawText: string,
     *   rRsetType: int,
     *   strings: array<string>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->name = $values['name'];
        $this->type = $values['type'];
        $this->dnsType = $values['dnsType'];
        $this->ttl = $values['ttl'];
        $this->rawText = $values['rawText'];
        $this->rRsetType = $values['rRsetType'];
        $this->strings = $values['strings'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
