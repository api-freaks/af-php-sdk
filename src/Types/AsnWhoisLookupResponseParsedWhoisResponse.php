<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;
use Apifreaks\Core\Types\ArrayType;

class AsnWhoisLookupResponseParsedWhoisResponse extends JsonSerializableType
{
    /**
     * @var bool $status
     */
    #[JsonProperty('status')]
    public bool $status;

    /**
     * @var string $whoisServer
     */
    #[JsonProperty('whois_server')]
    public string $whoisServer;

    /**
     * @var array<AsnWhoisLookupResponseParsedWhoisResponseAutNumsItem> $autNums
     */
    #[JsonProperty('aut_nums'), ArrayType([AsnWhoisLookupResponseParsedWhoisResponseAutNumsItem::class])]
    public array $autNums;

    /**
     * @var AsnWhoisLookupResponseParsedWhoisResponseOrganization $organization
     */
    #[JsonProperty('organization')]
    public AsnWhoisLookupResponseParsedWhoisResponseOrganization $organization;

    /**
     * @var array<AsnWhoisLookupResponseParsedWhoisResponseTechnicalContactsItem> $technicalContacts
     */
    #[JsonProperty('technical_contacts'), ArrayType([AsnWhoisLookupResponseParsedWhoisResponseTechnicalContactsItem::class])]
    public array $technicalContacts;

    /**
     * @var array<AsnWhoisLookupResponseParsedWhoisResponseAbuseContactsItem> $abuseContacts
     */
    #[JsonProperty('abuse_contacts'), ArrayType([AsnWhoisLookupResponseParsedWhoisResponseAbuseContactsItem::class])]
    public array $abuseContacts;

    /**
     * @param array{
     *   status: bool,
     *   whoisServer: string,
     *   autNums: array<AsnWhoisLookupResponseParsedWhoisResponseAutNumsItem>,
     *   organization: AsnWhoisLookupResponseParsedWhoisResponseOrganization,
     *   technicalContacts: array<AsnWhoisLookupResponseParsedWhoisResponseTechnicalContactsItem>,
     *   abuseContacts: array<AsnWhoisLookupResponseParsedWhoisResponseAbuseContactsItem>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->status = $values['status'];
        $this->whoisServer = $values['whoisServer'];
        $this->autNums = $values['autNums'];
        $this->organization = $values['organization'];
        $this->technicalContacts = $values['technicalContacts'];
        $this->abuseContacts = $values['abuseContacts'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
