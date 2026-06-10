<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;

class GeolocationLookupResponseNetworkCompany extends JsonSerializableType
{
    /**
     * @var ?string $name The name of the company
     */
    #[JsonProperty('name')]
    public ?string $name;

    /**
     * @var ?string $type The type of the company
     */
    #[JsonProperty('type')]
    public ?string $type;

    /**
     * @var ?string $domain The domain associated with the company
     */
    #[JsonProperty('domain')]
    public ?string $domain;

    /**
     * @param array{
     *   name?: ?string,
     *   type?: ?string,
     *   domain?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->name = $values['name'] ?? null;
        $this->type = $values['type'] ?? null;
        $this->domain = $values['domain'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
