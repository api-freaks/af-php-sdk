<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;

class DomainDnsHistoryResponseHistoricalDnsRecordsItemDnsTypes extends JsonSerializableType
{
    /**
     * @var ?float $a
     */
    #[JsonProperty('A')]
    public ?float $a;

    /**
     * @var ?float $aaaa
     */
    #[JsonProperty('AAAA')]
    public ?float $aaaa;

    /**
     * @var ?float $cname
     */
    #[JsonProperty('CNAME')]
    public ?float $cname;

    /**
     * @var ?float $mx
     */
    #[JsonProperty('MX')]
    public ?float $mx;

    /**
     * @var ?float $ns
     */
    #[JsonProperty('NS')]
    public ?float $ns;

    /**
     * @var ?float $soa
     */
    #[JsonProperty('SOA')]
    public ?float $soa;

    /**
     * @var ?float $txt
     */
    #[JsonProperty('TXT')]
    public ?float $txt;

    /**
     * @var ?float $spf
     */
    #[JsonProperty('SPF')]
    public ?float $spf;

    /**
     * @param array{
     *   a?: ?float,
     *   aaaa?: ?float,
     *   cname?: ?float,
     *   mx?: ?float,
     *   ns?: ?float,
     *   soa?: ?float,
     *   txt?: ?float,
     *   spf?: ?float,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->a = $values['a'] ?? null;
        $this->aaaa = $values['aaaa'] ?? null;
        $this->cname = $values['cname'] ?? null;
        $this->mx = $values['mx'] ?? null;
        $this->ns = $values['ns'] ?? null;
        $this->soa = $values['soa'] ?? null;
        $this->txt = $values['txt'] ?? null;
        $this->spf = $values['spf'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
