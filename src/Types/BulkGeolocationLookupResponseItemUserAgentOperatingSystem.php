<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;

class BulkGeolocationLookupResponseItemUserAgentOperatingSystem extends JsonSerializableType
{
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
     * @var ?string $build
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
