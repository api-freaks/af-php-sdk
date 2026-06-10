<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;

class AsnWhoisLookupResponseUpstreamsItem extends JsonSerializableType
{
    /**
     * @var string $asNumber
     */
    #[JsonProperty('asNumber')]
    public string $asNumber;

    /**
     * @var string $description
     */
    #[JsonProperty('description')]
    public string $description;

    /**
     * @var string $country
     */
    #[JsonProperty('country')]
    public string $country;

    /**
     * @param array{
     *   asNumber: string,
     *   description: string,
     *   country: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->asNumber = $values['asNumber'];
        $this->description = $values['description'];
        $this->country = $values['country'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
