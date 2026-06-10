<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;

class BulkDomainWhoisLookupResponseBulkWhoisResponseItemDomainRegistrar extends JsonSerializableType
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
     * @param array{
     *   ianaId?: ?string,
     *   registrarName?: ?string,
     *   whoisServer?: ?string,
     *   websiteUrl?: ?string,
     *   emailAddress?: ?string,
     *   phoneNumber?: ?string,
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
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
