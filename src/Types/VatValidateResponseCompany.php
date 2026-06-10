<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;

class VatValidateResponseCompany extends JsonSerializableType
{
    /**
     * @var string $companyName
     */
    #[JsonProperty('company_name')]
    public string $companyName;

    /**
     * @var string $companyAddress
     */
    #[JsonProperty('company_address')]
    public string $companyAddress;

    /**
     * @param array{
     *   companyName: string,
     *   companyAddress: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->companyName = $values['companyName'];
        $this->companyAddress = $values['companyAddress'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
