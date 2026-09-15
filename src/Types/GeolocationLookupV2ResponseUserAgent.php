<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;

/**
 * Parsed User-Agent details from the request.
 */
class GeolocationLookupV2ResponseUserAgent extends JsonSerializableType
{
    /**
     * @var ?string $userAgentString Raw User-Agent string used for parsing.
     */
    #[JsonProperty('user_agent_string')]
    public ?string $userAgentString;

    /**
     * @var ?string $name Detected user agent product name.
     */
    #[JsonProperty('name')]
    public ?string $name;

    /**
     * @var ?string $type User agent category (e.g., Browser, Mobile App, Bot).
     */
    #[JsonProperty('type')]
    public ?string $type;

    /**
     * @var ?string $version Full product version string.
     */
    #[JsonProperty('version')]
    public ?string $version;

    /**
     * @var ?string $versionMajor Major version extracted from version.
     */
    #[JsonProperty('version_major')]
    public ?string $versionMajor;

    /**
     * @var ?GeolocationLookupV2ResponseUserAgentDevice $device Device details.
     */
    #[JsonProperty('device')]
    public ?GeolocationLookupV2ResponseUserAgentDevice $device;

    /**
     * @var ?GeolocationLookupV2ResponseUserAgentEngine $engine Rendering engine details.
     */
    #[JsonProperty('engine')]
    public ?GeolocationLookupV2ResponseUserAgentEngine $engine;

    /**
     * @var ?GeolocationLookupV2ResponseUserAgentOperatingSystem $operatingSystem Operating system details.
     */
    #[JsonProperty('operating_system')]
    public ?GeolocationLookupV2ResponseUserAgentOperatingSystem $operatingSystem;

    /**
     * @param array{
     *   userAgentString?: ?string,
     *   name?: ?string,
     *   type?: ?string,
     *   version?: ?string,
     *   versionMajor?: ?string,
     *   device?: ?GeolocationLookupV2ResponseUserAgentDevice,
     *   engine?: ?GeolocationLookupV2ResponseUserAgentEngine,
     *   operatingSystem?: ?GeolocationLookupV2ResponseUserAgentOperatingSystem,
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
