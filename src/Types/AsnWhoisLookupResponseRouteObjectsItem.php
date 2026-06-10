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
     * @var int $numberOfIps
     */
    #[JsonProperty('numberOfIps')]
    public int $numberOfIps;

    /**
     * @param array{
     *   route: string,
     *   origin: string,
     *   originName: string,
     *   isp: string,
     *   numberOfIps: int,
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
