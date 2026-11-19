<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;

class DomainWhoisReverseResponseWhoisDomainsHistoricalItemAdministrativeContactDomainRegistrar extends JsonSerializableType
{
    /**
     * @var ?string $ianaId
     */
    #[JsonProperty('iana_id')]
    public ?string $ianaId;

    /**
     * @var ?string $registrarName
     */
    #[JsonProperty('registrar_name')]
    public ?string $registrarName;

    /**
     * @var ?string $whoisServer
     */
    #[JsonProperty('whois_server')]
    public ?string $whoisServer;

    /**
     * @var ?string $websiteUrl
     */
    #[JsonProperty('website_url')]
    public ?string $websiteUrl;

    /**
     * @var ?string $emailAddress
     */
    #[JsonProperty('email_address')]
    public ?string $emailAddress;

    /**
     * @var ?string $phoneNumber
     */
    #[JsonProperty('phone_number')]
    public ?string $phoneNumber;

    /**
     * @var ?string $normalizedName Normalized (lowercase, stripped) registrar name, when published.
     */
    #[JsonProperty('normalized_name')]
    public ?string $normalizedName;

    /**
     * @var ?string $rdapServer RDAP (Registration Data Access Protocol) server URL of the registrar, when published.
     */
    #[JsonProperty('rdap_server')]
    public ?string $rdapServer;

    /**
     * @var ?string $status Accreditation status of the registrar (e.g., 'accredited'), when published.
     */
    #[JsonProperty('status')]
    public ?string $status;

    /**
     * @param array{
     *   ianaId?: ?string,
     *   registrarName?: ?string,
     *   whoisServer?: ?string,
     *   websiteUrl?: ?string,
     *   emailAddress?: ?string,
     *   phoneNumber?: ?string,
     *   normalizedName?: ?string,
     *   rdapServer?: ?string,
     *   status?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->ianaId = $values['ianaId'] ?? null;
        $this->registrarName = $values['registrarName'] ?? null;
        $this->whoisServer = $values['whoisServer'] ?? null;
        $this->websiteUrl = $values['websiteUrl'] ?? null;
        $this->emailAddress = $values['emailAddress'] ?? null;
        $this->phoneNumber = $values['phoneNumber'] ?? null;
        $this->normalizedName = $values['normalizedName'] ?? null;
        $this->rdapServer = $values['rdapServer'] ?? null;
        $this->status = $values['status'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
