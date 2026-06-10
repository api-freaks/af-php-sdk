<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;

class DomainDnsLookupResponseDnsRecordsItemAdmin extends JsonSerializableType
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
     * @var value-of<DomainDnsLookupResponseDnsRecordsItemAdminDnsType> $dnsType
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
     * @var string $admin
     */
    #[JsonProperty('admin')]
    public string $admin;

    /**
     * @var string $host
     */
    #[JsonProperty('host')]
    public string $host;

    /**
     * @var int $expire
     */
    #[JsonProperty('expire')]
    public int $expire;

    /**
     * @var int $minimum
     */
    #[JsonProperty('minimum')]
    public int $minimum;

    /**
     * @var int $refresh
     */
    #[JsonProperty('refresh')]
    public int $refresh;

    /**
     * @var int $retry
     */
    #[JsonProperty('retry')]
    public int $retry;

    /**
     * @var int $serial
     */
    #[JsonProperty('serial')]
    public int $serial;

    /**
     * @param array{
     *   name: string,
     *   type: int,
     *   dnsType: value-of<DomainDnsLookupResponseDnsRecordsItemAdminDnsType>,
     *   ttl: int,
     *   rawText: string,
     *   rRsetType: int,
     *   admin: string,
     *   host: string,
     *   expire: int,
     *   minimum: int,
     *   refresh: int,
     *   retry: int,
     *   serial: int,
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
        $this->admin = $values['admin'];
        $this->host = $values['host'];
        $this->expire = $values['expire'];
        $this->minimum = $values['minimum'];
        $this->refresh = $values['refresh'];
        $this->retry = $values['retry'];
        $this->serial = $values['serial'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
