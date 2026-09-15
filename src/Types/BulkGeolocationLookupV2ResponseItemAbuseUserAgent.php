<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;

/**
 * Parsed User-Agent details from the request.
 */
class BulkGeolocationLookupV2ResponseItemAbuseUserAgent extends JsonSerializableType
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
     * @var ?BulkGeolocationLookupV2ResponseItemAbuseUserAgentDevice $device Device details.
     */
    #[JsonProperty('device')]
    public ?BulkGeolocationLookupV2ResponseItemAbuseUserAgentDevice $device;

    /**
     * @var ?BulkGeolocationLookupV2ResponseItemAbuseUserAgentEngine $engine Rendering engine details.
     */
    #[JsonProperty('engine')]
    public ?BulkGeolocationLookupV2ResponseItemAbuseUserAgentEngine $engine;

    /**
     * @var ?BulkGeolocationLookupV2ResponseItemAbuseUserAgentOperatingSystem $operatingSystem Operating system details.
     */
    #[JsonProperty('operating_system')]
    public ?BulkGeolocationLookupV2ResponseItemAbuseUserAgentOperatingSystem $operatingSystem;

    /**
     * @param array{
     *   userAgentString?: ?string,
     *   name?: ?string,
     *   type?: ?string,
     *   version?: ?string,
     *   versionMajor?: ?string,
     *   device?: ?BulkGeolocationLookupV2ResponseItemAbuseUserAgentDevice,
     *   engine?: ?BulkGeolocationLookupV2ResponseItemAbuseUserAgentEngine,
     *   operatingSystem?: ?BulkGeolocationLookupV2ResponseItemAbuseUserAgentOperatingSystem,
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
