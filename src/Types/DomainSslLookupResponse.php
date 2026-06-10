<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;
use DateTime;
use Apifreaks\Core\Types\Date;
use Apifreaks\Core\Types\ArrayType;

class DomainSslLookupResponse extends JsonSerializableType
{
    /**
     * @var string $domainName
     */
    #[JsonProperty('domainName')]
    public string $domainName;

    /**
     * @var DateTime $queryTime
     */
    #[JsonProperty('queryTime'), Date(Date::TYPE_DATETIME)]
    public DateTime $queryTime;

    /**
     * @var array<DomainSslLookupResponseSslCertificatesItem> $sslCertificates
     */
    #[JsonProperty('sslCertificates'), ArrayType([DomainSslLookupResponseSslCertificatesItem::class])]
    public array $sslCertificates;

    /**
     * @var ?string $sslRaw
     */
    #[JsonProperty('sslRaw')]
    public ?string $sslRaw;

    /**
     * @param array{
     *   domainName: string,
     *   queryTime: DateTime,
     *   sslCertificates: array<DomainSslLookupResponseSslCertificatesItem>,
     *   sslRaw?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->domainName = $values['domainName'];
        $this->queryTime = $values['queryTime'];
        $this->sslCertificates = $values['sslCertificates'];
        $this->sslRaw = $values['sslRaw'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
