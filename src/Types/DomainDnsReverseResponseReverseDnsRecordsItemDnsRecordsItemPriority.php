<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;

class DomainDnsReverseResponseReverseDnsRecordsItemDnsRecordsItemPriority extends JsonSerializableType
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
     * @var value-of<DomainDnsReverseResponseReverseDnsRecordsItemDnsRecordsItemPriorityDnsType> $dnsType
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
     * @var string $target
     */
    #[JsonProperty('target')]
    public string $target;

    /**
     * @var int $priority
     */
    #[JsonProperty('priority')]
    public int $priority;

    /**
     * @param array{
     *   name: string,
     *   type: int,
     *   dnsType: value-of<DomainDnsReverseResponseReverseDnsRecordsItemDnsRecordsItemPriorityDnsType>,
     *   ttl: int,
     *   rawText: string,
     *   rRsetType: int,
     *   target: string,
     *   priority: int,
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
        $this->target = $values['target'];
        $this->priority = $values['priority'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
