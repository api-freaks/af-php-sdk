<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;

class DomainSslLookupResponseSslCertificatesItemIssuer extends JsonSerializableType
{
    /**
     * @var string $commonName
     */
    #[JsonProperty('commonName')]
    public string $commonName;

    /**
     * @var ?string $organization
     */
    #[JsonProperty('organization')]
    public ?string $organization;

    /**
     * @var ?string $organizationalUnit
     */
    #[JsonProperty('organizationalUnit')]
    public ?string $organizationalUnit;

    /**
     * @var ?string $locality
     */
    #[JsonProperty('locality')]
    public ?string $locality;

    /**
     * @var ?string $state
     */
    #[JsonProperty('state')]
    public ?string $state;

    /**
     * @var ?string $country
     */
    #[JsonProperty('country')]
    public ?string $country;

    /**
     * @var ?string $incCountry
     */
    #[JsonProperty('incCountry')]
    public ?string $incCountry;

    /**
     * @var ?string $incState
     */
    #[JsonProperty('incState')]
    public ?string $incState;

    /**
     * @var ?string $businessCategory
     */
    #[JsonProperty('businessCategory')]
    public ?string $businessCategory;

    /**
     * @var ?string $street
     */
    #[JsonProperty('street')]
    public ?string $street;

    /**
     * @var ?string $postalCode
     */
    #[JsonProperty('postalCode')]
    public ?string $postalCode;

    /**
     * @var ?string $serialNumber
     */
    #[JsonProperty('serialNumber')]
    public ?string $serialNumber;

    /**
     * @param array{
     *   commonName: string,
     *   organization?: ?string,
     *   organizationalUnit?: ?string,
     *   locality?: ?string,
     *   state?: ?string,
     *   country?: ?string,
     *   incCountry?: ?string,
     *   incState?: ?string,
     *   businessCategory?: ?string,
     *   street?: ?string,
     *   postalCode?: ?string,
     *   serialNumber?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->commonName = $values['commonName'];
        $this->organization = $values['organization'] ?? null;
        $this->organizationalUnit = $values['organizationalUnit'] ?? null;
        $this->locality = $values['locality'] ?? null;
        $this->state = $values['state'] ?? null;
        $this->country = $values['country'] ?? null;
        $this->incCountry = $values['incCountry'] ?? null;
        $this->incState = $values['incState'] ?? null;
        $this->businessCategory = $values['businessCategory'] ?? null;
        $this->street = $values['street'] ?? null;
        $this->postalCode = $values['postalCode'] ?? null;
        $this->serialNumber = $values['serialNumber'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
