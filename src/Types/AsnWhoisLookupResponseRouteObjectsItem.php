<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;

class AsnWhoisLookupResponseRouteObjectsItem extends JsonSerializableType
{
    /**
     * @var string $route
     */
    #[JsonProperty('route')]
    public string $route;

    /**
     * @var string $origin
     */
    #[JsonProperty('origin')]
    public string $origin;

    /**
     * @var string $originName
     */
    #[JsonProperty('originName')]
    public string $originName;

    /**
     * @var string $isp
     */
    #[JsonProperty('isp')]
    public string $isp;

    /**
     * @var float $numberOfIps Number of IP addresses in the route. IPv6 routes exceed the 64-bit integer range, so this is a floating-point number.
     */
    #[JsonProperty('numberOfIps')]
    public float $numberOfIps;

    /**
     * @param array{
     *   route: string,
     *   origin: string,
     *   originName: string,
     *   isp: string,
     *   numberOfIps: float,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->route = $values['route'];
        $this->origin = $values['origin'];
        $this->originName = $values['originName'];
        $this->isp = $values['isp'];
        $this->numberOfIps = $values['numberOfIps'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
