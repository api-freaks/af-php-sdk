<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;

/**
 * Network information for the IP.
 */
class GeolocationLookupV2ResponseNetwork extends JsonSerializableType
{
    /**
     * @var ?string $connectionType Network access type classification (e.g., DSL, Cable, Mobile, 5G) when available.
     */
    #[JsonProperty('connection_type')]
    public ?string $connectionType;

    /**
     * @var ?string $route Network prefix in CIDR notation that contains the IP.
     */
    #[JsonProperty('route')]
    public ?string $route;

    /**
     * @var ?bool $isAnycast true if the IP is anycast (same IP announced from multiple locations).
     */
    #[JsonProperty('is_anycast')]
    public ?bool $isAnycast;

    /**
     * @param array{
     *   connectionType?: ?string,
     *   route?: ?string,
     *   isAnycast?: ?bool,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->connectionType = $values['connectionType'] ?? null;
        $this->route = $values['route'] ?? null;
        $this->isAnycast = $values['isAnycast'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
