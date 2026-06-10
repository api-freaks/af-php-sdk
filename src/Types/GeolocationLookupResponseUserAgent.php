<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;

class GeolocationLookupResponseUserAgent extends JsonSerializableType
{
    /**
     * @var ?string $userAgentString
     */
    #[JsonProperty('user_agent_string')]
    public ?string $userAgentString;

    /**
     * @var ?string $name
     */
    #[JsonProperty('name')]
    public ?string $name;

    /**
     * @var ?string $type
     */
    #[JsonProperty('type')]
    public ?string $type;

    /**
     * @var ?string $version
     */
    #[JsonProperty('version')]
    public ?string $version;

    /**
     * @var ?string $versionMajor
     */
    #[JsonProperty('version_major')]
    public ?string $versionMajor;

    /**
     * @var ?GeolocationLookupResponseUserAgentDevice $device
     */
    #[JsonProperty('device')]
    public ?GeolocationLookupResponseUserAgentDevice $device;

    /**
     * @var ?GeolocationLookupResponseUserAgentEngine $engine
     */
    #[JsonProperty('engine')]
    public ?GeolocationLookupResponseUserAgentEngine $engine;

    /**
     * @var ?GeolocationLookupResponseUserAgentOperatingSystem $operatingSystem
     */
    #[JsonProperty('operating_system')]
    public ?GeolocationLookupResponseUserAgentOperatingSystem $operatingSystem;

    /**
     * @param array{
     *   userAgentString?: ?string,
     *   name?: ?string,
     *   type?: ?string,
     *   version?: ?string,
     *   versionMajor?: ?string,
     *   device?: ?GeolocationLookupResponseUserAgentDevice,
     *   engine?: ?GeolocationLookupResponseUserAgentEngine,
     *   operatingSystem?: ?GeolocationLookupResponseUserAgentOperatingSystem,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->userAgentString = $values['userAgentString'] ?? null;
        $this->name = $values['name'] ?? null;
        $this->type = $values['type'] ?? null;
        $this->version = $values['version'] ?? null;
        $this->versionMajor = $values['versionMajor'] ?? null;
        $this->device = $values['device'] ?? null;
        $this->engine = $values['engine'] ?? null;
        $this->operatingSystem = $values['operatingSystem'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
