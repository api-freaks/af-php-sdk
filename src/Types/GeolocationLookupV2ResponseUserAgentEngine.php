<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;

/**
 * Rendering engine details.
 */
class GeolocationLookupV2ResponseUserAgentEngine extends JsonSerializableType
{
    /**
     * @var ?string $name Rendering engine name.
     */
    #[JsonProperty('name')]
    public ?string $name;

    /**
     * @var ?string $type Engine category.
     */
    #[JsonProperty('type')]
    public ?string $type;

    /**
     * @var ?string $version Full engine version string.
     */
    #[JsonProperty('version')]
    public ?string $version;

    /**
     * @var ?string $versionMajor Major engine version.
     */
    #[JsonProperty('version_major')]
    public ?string $versionMajor;

    /**
     * @param array{
     *   name?: ?string,
     *   type?: ?string,
     *   version?: ?string,
     *   versionMajor?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->name = $values['name'] ?? null;
        $this->type = $values['type'] ?? null;
        $this->version = $values['version'] ?? null;
        $this->versionMajor = $values['versionMajor'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
