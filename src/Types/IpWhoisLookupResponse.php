<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;
use Apifreaks\Core\Types\ArrayType;

class IpWhoisLookupResponse extends JsonSerializableType
{
    /**
     * @var ?bool $status
     */
    #[JsonProperty('status')]
    public ?bool $status;

    /**
     * @var ?string $ipAddress
     */
    #[JsonProperty('ip_address')]
    public ?string $ipAddress;

    /**
     * @var ?string $queryTime
     */
    #[JsonProperty('query_time')]
    public ?string $queryTime;

    /**
     * @var ?string $whoisServer
     */
    #[JsonProperty('whois_server')]
    public ?string $whoisServer;

    /**
     * @var ?array<IpWhoisLookupResponseInetNumsItem> $inetNums
     */
    #[JsonProperty('inet_nums'), ArrayType([IpWhoisLookupResponseInetNumsItem::class])]
    public ?array $inetNums;

    /**
     * @var ?IpWhoisLookupResponseIrt $irt
     */
    #[JsonProperty('irt')]
    public ?IpWhoisLookupResponseIrt $irt;

    /**
     * @var ?IpWhoisLookupResponseOrganization $organization
     */
    #[JsonProperty('organization')]
    public ?IpWhoisLookupResponseOrganization $organization;

    /**
     * @var ?array<IpWhoisLookupResponseTechnicalContactsItem> $technicalContacts
     */
    #[JsonProperty('technical_contacts'), ArrayType([IpWhoisLookupResponseTechnicalContactsItem::class])]
    public ?array $technicalContacts;

    /**
     * @var ?array<IpWhoisLookupResponseAbuseContactsItem> $abuseContacts
     */
    #[JsonProperty('abuse_contacts'), ArrayType([IpWhoisLookupResponseAbuseContactsItem::class])]
    public ?array $abuseContacts;

    /**
     * @var ?array<IpWhoisLookupResponseAdministrativeContactsItem> $administrativeContacts
     */
    #[JsonProperty('administrative_contacts'), ArrayType([IpWhoisLookupResponseAdministrativeContactsItem::class])]
    public ?array $administrativeContacts;

    /**
     * @var ?string $whoisRawResponse
     */
    #[JsonProperty('whois_raw_response')]
    public ?string $whoisRawResponse;

    /**
     * @param array{
     *   status?: ?bool,
     *   ipAddress?: ?string,
     *   queryTime?: ?string,
     *   whoisServer?: ?string,
     *   inetNums?: ?array<IpWhoisLookupResponseInetNumsItem>,
     *   irt?: ?IpWhoisLookupResponseIrt,
     *   organization?: ?IpWhoisLookupResponseOrganization,
     *   technicalContacts?: ?array<IpWhoisLookupResponseTechnicalContactsItem>,
     *   abuseContacts?: ?array<IpWhoisLookupResponseAbuseContactsItem>,
     *   administrativeContacts?: ?array<IpWhoisLookupResponseAdministrativeContactsItem>,
     *   whoisRawResponse?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->status = $values['status'] ?? null;
        $this->ipAddress = $values['ipAddress'] ?? null;
        $this->queryTime = $values['queryTime'] ?? null;
        $this->whoisServer = $values['whoisServer'] ?? null;
        $this->inetNums = $values['inetNums'] ?? null;
        $this->irt = $values['irt'] ?? null;
        $this->organization = $values['organization'] ?? null;
        $this->technicalContacts = $values['technicalContacts'] ?? null;
        $this->abuseContacts = $values['abuseContacts'] ?? null;
        $this->administrativeContacts = $values['administrativeContacts'] ?? null;
        $this->whoisRawResponse = $values['whoisRawResponse'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
