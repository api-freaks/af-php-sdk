<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;

/**
 * Input object containing the analyzed domain.
 */
class DomainReputationResponseInput extends JsonSerializableType
{
    /**
     * @var string $domain Domain name being analyzed.
     */
    #[JsonProperty('domain')]
    public string $domain;

    /**
     * @param array{
     *   domain: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->domain = $values['domain'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
