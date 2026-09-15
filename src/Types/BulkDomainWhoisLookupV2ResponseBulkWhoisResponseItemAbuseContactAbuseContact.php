<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;

/**
 * Registrar's abuse-reporting contact.
 */
class BulkDomainWhoisLookupV2ResponseBulkWhoisResponseItemAbuseContactAbuseContact extends JsonSerializableType
{
    /**
     * @var ?string $registrarName Name of the abuse contact at the registrar.
     */
    #[JsonProperty('registrar_name')]
    public ?string $registrarName;

    /**
     * @var ?string $emailAddress Abuse contact email.
     */
    #[JsonProperty('email_address')]
    public ?string $emailAddress;

    /**
     * @var ?string $phoneNumber Abuse contact phone.
     */
    #[JsonProperty('phone_number')]
    public ?string $phoneNumber;

    /**
     * @param array{
     *   registrarName?: ?string,
     *   emailAddress?: ?string,
     *   phoneNumber?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->registrarName = $values['registrarName'] ?? null;
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
