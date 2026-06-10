<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;

class GeolocationLookupResponseNetwork extends JsonSerializableType
{
    /**
     * @var ?GeolocationLookupResponseNetworkAsn $asn
     */
    #[JsonProperty('asn')]
    public ?GeolocationLookupResponseNetworkAsn $asn;

    /**
     * @var ?string $connectionType The type of the connection
     */
    #[JsonProperty('connection_type')]
    public ?string $connectionType;

    /**
     * @var ?GeolocationLookupResponseNetworkCompany $company
     */
    #[JsonProperty('company')]
    public ?GeolocationLookupResponseNetworkCompany $company;

    /**
     * @param array{
     *   asn?: ?GeolocationLookupResponseNetworkAsn,
     *   connectionType?: ?string,
     *   company?: ?GeolocationLookupResponseNetworkCompany,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->asn = $values['asn'] ?? null;
        $this->connectionType = $values['connectionType'] ?? null;
        $this->company = $values['company'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
