<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;

class BulkGeolocationLookupResponseItemNetwork extends JsonSerializableType
{
    /**
     * @var ?BulkGeolocationLookupResponseItemNetworkAsn $asn
     */
    #[JsonProperty('asn')]
    public ?BulkGeolocationLookupResponseItemNetworkAsn $asn;

    /**
     * @var ?string $connectionType The type of the connection
     */
    #[JsonProperty('connection_type')]
    public ?string $connectionType;

    /**
     * @var ?BulkGeolocationLookupResponseItemNetworkCompany $company
     */
    #[JsonProperty('company')]
    public ?BulkGeolocationLookupResponseItemNetworkCompany $company;

    /**
     * @param array{
     *   asn?: ?BulkGeolocationLookupResponseItemNetworkAsn,
     *   connectionType?: ?string,
     *   company?: ?BulkGeolocationLookupResponseItemNetworkCompany,
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
