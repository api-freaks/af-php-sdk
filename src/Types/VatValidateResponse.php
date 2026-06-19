<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;
use DateTime;
use Apifreaks\Core\Types\Date;

class VatValidateResponse extends JsonSerializableType
{
    /**
     * @var string $countryCode
     */
    #[JsonProperty('country_code')]
    public string $countryCode;

    /**
     * @var string $vatNumber
     */
    #[JsonProperty('vat_number')]
    public string $vatNumber;

    /**
     * @var string $requesterCountryCode
     */
    #[JsonProperty('requester_country_code')]
    public string $requesterCountryCode;

    /**
     * @var string $requesterVatNumber
     */
    #[JsonProperty('requester_vat_number')]
    public string $requesterVatNumber;

    /**
     * @var DateTime $requestedAt
     */
    #[JsonProperty('requested_at'), Date(Date::TYPE_DATETIME)]
    public DateTime $requestedAt;

    /**
     * @var VatValidateResponseValidation $validation
     */
    #[JsonProperty('validation')]
    public VatValidateResponseValidation $validation;

    /**
     * @var VatValidateResponseCompany $company
     */
    #[JsonProperty('company')]
    public VatValidateResponseCompany $company;

    /**
     * @param array{
     *   countryCode: string,
     *   vatNumber: string,
     *   requesterCountryCode: string,
     *   requesterVatNumber: string,
     *   requestedAt: DateTime,
     *   validation: VatValidateResponseValidation,
     *   company: VatValidateResponseCompany,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->countryCode = $values['countryCode'];
        $this->vatNumber = $values['vatNumber'];
        $this->requesterCountryCode = $values['requesterCountryCode'];
        $this->requesterVatNumber = $values['requesterVatNumber'];
        $this->requestedAt = $values['requestedAt'];
        $this->validation = $values['validation'];
        $this->company = $values['company'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
