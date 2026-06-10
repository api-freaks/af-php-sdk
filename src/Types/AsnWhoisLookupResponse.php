<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;
use DateTime;
use Apifreaks\Core\Types\Date;
use Apifreaks\Core\Types\ArrayType;

class AsnWhoisLookupResponse extends JsonSerializableType
{
    /**
     * @var string $asNumber
     */
    #[JsonProperty('asNumber')]
    public string $asNumber;

    /**
     * @var string $asName
     */
    #[JsonProperty('asName')]
    public string $asName;

    /**
     * @var string $orgName
     */
    #[JsonProperty('orgName')]
    public string $orgName;

    /**
     * @var ?string $description
     */
    #[JsonProperty('description')]
    public ?string $description;

    /**
     * @var string $orgHandle
     */
    #[JsonProperty('orgHandle')]
    public string $orgHandle;

    /**
     * @var string $country
     */
    #[JsonProperty('country')]
    public string $country;

    /**
     * @var ?string $domain
     */
    #[JsonProperty('domain')]
    public ?string $domain;

    /**
     * @var ?string $website
     */
    #[JsonProperty('website')]
    public ?string $website;

    /**
     * @var string $allocationStatus
     */
    #[JsonProperty('allocationStatus')]
    public string $allocationStatus;

    /**
     * @var string $numOfIPv4Routes
     */
    #[JsonProperty('numOfIPv4Routes')]
    public string $numOfIPv4Routes;

    /**
     * @var string $numOfIPv6Routes
     */
    #[JsonProperty('numOfIPv6Routes')]
    public string $numOfIPv6Routes;

    /**
     * @var string $whoisHost
     */
    #[JsonProperty('whoisHost')]
    public string $whoisHost;

    /**
     * @var ?DateTime $dateAllocated
     */
    #[JsonProperty('dateAllocated'), Date(Date::TYPE_DATE)]
    public ?DateTime $dateAllocated;

    /**
     * @var string $type
     */
    #[JsonProperty('type')]
    public string $type;

    /**
     * @var array<AsnWhoisLookupResponseRouteObjectsItem> $routeObjects
     */
    #[JsonProperty('routeObjects'), ArrayType([AsnWhoisLookupResponseRouteObjectsItem::class])]
    public array $routeObjects;

    /**
     * @var string $whoisResponse
     */
    #[JsonProperty('whoisResponse')]
    public string $whoisResponse;

    /**
     * @var array<AsnWhoisLookupResponseDownstreamsItem> $downstreams
     */
    #[JsonProperty('downstreams'), ArrayType([AsnWhoisLookupResponseDownstreamsItem::class])]
    public array $downstreams;

    /**
     * @var AsnWhoisLookupResponseParsedWhoisResponse $parsedWhoisResponse
     */
    #[JsonProperty('parsedWhoisResponse')]
    public AsnWhoisLookupResponseParsedWhoisResponse $parsedWhoisResponse;

    /**
     * @var array<AsnWhoisLookupResponseUpstreamsItem> $upstreams
     */
    #[JsonProperty('upstreams'), ArrayType([AsnWhoisLookupResponseUpstreamsItem::class])]
    public array $upstreams;

    /**
     * @var array<AsnWhoisLookupResponsePeersItem> $peers
     */
    #[JsonProperty('peers'), ArrayType([AsnWhoisLookupResponsePeersItem::class])]
    public array $peers;

    /**
     * @var AsnWhoisLookupResponseContacts $contacts
     */
    #[JsonProperty('contacts')]
    public AsnWhoisLookupResponseContacts $contacts;

    /**
     * @var array<string> $legacyRoutes
     */
    #[JsonProperty('legacyRoutes'), ArrayType(['string'])]
    public array $legacyRoutes;

    /**
     * @var ?string $whoisRawResponse
     */
    #[JsonProperty('whois_raw_response')]
    public ?string $whoisRawResponse;

    /**
     * @var ?string $rWhoisRawResponse
     */
    #[JsonProperty('r_whois_raw_response')]
    public ?string $rWhoisRawResponse;

    /**
     * @var ?string $queryTime
     */
    #[JsonProperty('query_time')]
    public ?string $queryTime;

    /**
     * @param array{
     *   asNumber: string,
     *   asName: string,
     *   orgName: string,
     *   orgHandle: string,
     *   country: string,
     *   allocationStatus: string,
     *   numOfIPv4Routes: string,
     *   numOfIPv6Routes: string,
     *   whoisHost: string,
     *   type: string,
     *   routeObjects: array<AsnWhoisLookupResponseRouteObjectsItem>,
     *   whoisResponse: string,
     *   downstreams: array<AsnWhoisLookupResponseDownstreamsItem>,
     *   parsedWhoisResponse: AsnWhoisLookupResponseParsedWhoisResponse,
     *   upstreams: array<AsnWhoisLookupResponseUpstreamsItem>,
     *   peers: array<AsnWhoisLookupResponsePeersItem>,
     *   contacts: AsnWhoisLookupResponseContacts,
     *   legacyRoutes: array<string>,
     *   description?: ?string,
     *   domain?: ?string,
     *   website?: ?string,
     *   dateAllocated?: ?DateTime,
     *   whoisRawResponse?: ?string,
     *   rWhoisRawResponse?: ?string,
     *   queryTime?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->asNumber = $values['asNumber'];
        $this->asName = $values['asName'];
        $this->orgName = $values['orgName'];
        $this->description = $values['description'] ?? null;
        $this->orgHandle = $values['orgHandle'];
        $this->country = $values['country'];
        $this->domain = $values['domain'] ?? null;
        $this->website = $values['website'] ?? null;
        $this->allocationStatus = $values['allocationStatus'];
        $this->numOfIPv4Routes = $values['numOfIPv4Routes'];
        $this->numOfIPv6Routes = $values['numOfIPv6Routes'];
        $this->whoisHost = $values['whoisHost'];
        $this->dateAllocated = $values['dateAllocated'] ?? null;
        $this->type = $values['type'];
        $this->routeObjects = $values['routeObjects'];
        $this->whoisResponse = $values['whoisResponse'];
        $this->downstreams = $values['downstreams'];
        $this->parsedWhoisResponse = $values['parsedWhoisResponse'];
        $this->upstreams = $values['upstreams'];
        $this->peers = $values['peers'];
        $this->contacts = $values['contacts'];
        $this->legacyRoutes = $values['legacyRoutes'];
        $this->whoisRawResponse = $values['whoisRawResponse'] ?? null;
        $this->rWhoisRawResponse = $values['rWhoisRawResponse'] ?? null;
        $this->queryTime = $values['queryTime'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
