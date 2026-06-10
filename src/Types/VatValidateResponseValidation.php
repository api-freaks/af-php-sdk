<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;

class VatValidateResponseValidation extends JsonSerializableType
{
    /**
     * @var bool $isValid
     */
    #[JsonProperty('is_valid')]
    public bool $isValid;

    /**
     * @var ?string $consultationNumber Returned when the upstream authority provides a consultation reference.
     */
    #[JsonProperty('consultation_number')]
    public ?string $consultationNumber;

    /**
     * @var string $consultationAuthority
     */
    #[JsonProperty('consultation_authority')]
    public string $consultationAuthority;

    /**
     * @param array{
     *   isValid: bool,
     *   consultationAuthority: string,
     *   consultationNumber?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->isValid = $values['isValid'];
        $this->consultationNumber = $values['consultationNumber'] ?? null;
        $this->consultationAuthority = $values['consultationAuthority'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
