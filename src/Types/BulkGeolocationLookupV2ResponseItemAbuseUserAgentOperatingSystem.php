<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;

/**
 * Operating system details.
 */
class BulkGeolocationLookupV2ResponseItemAbuseUserAgentOperatingSystem extends JsonSerializableType
{
    /**
     * @var ?string $name Operating system name.
     */
    #[JsonProperty('name')]
    public ?string $name;

    /**
     * @var ?string $type OS category (Desktop, Mobile, Server).
     */
    #[JsonProperty('type')]
    public ?string $type;

    /**
     * @var ?string $version OS version string.
     */
    #[JsonProperty('version')]
    public ?string $version;

    /**
     * @var ?string $versionMajor Major OS version.
     */
    #[JsonProperty('version_major')]
    public ?string $versionMajor;

    /**
     * @var ?string $build OS build identifier.
     */
    #[JsonProperty('build')]
    public ?string $build;

    /**
     * @param array{
     *   name?: ?string,
     *   type?: ?string,
     *   version?: ?string,
     *   versionMajor?: ?string,
     *   build?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->name = $values['name'] ?? null;
        $this->type = $values['type'] ?? null;
        $this->version = $values['version'] ?? null;
        $this->versionMajor = $values['versionMajor'] ?? null;
        $this->build = $values['build'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
