<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;

class BulkUserAgentLookupResponseItemOperatingSystem extends JsonSerializableType
{
    /**
     * @var string $name Operating system name or the base software name that runs on the hardware.
     */
    #[JsonProperty('name')]
    public string $name;

    /**
     * Operating system type. Possible values:
     * 1. Desktop
     * 2. Mobile
     * 3. Game Console
     * 4. Embedded
     * 5. Cloud
     * 6. Hacker
     * 7. Anonymized
     * 8. Unknown
     *
     * @var string $type
     */
    #[JsonProperty('type')]
    public string $type;

    /**
     * @var string $version Operating system version
     */
    #[JsonProperty('version')]
    public string $version;

    /**
     * @var string $versionMajor Operating system version major
     */
    #[JsonProperty('version_major')]
    public string $versionMajor;

    /**
     * @var string $build Operating system build
     */
    #[JsonProperty('build')]
    public string $build;

    /**
     * @param array{
     *   name: string,
     *   type: string,
     *   version: string,
     *   versionMajor: string,
     *   build: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->name = $values['name'];
        $this->type = $values['type'];
        $this->version = $values['version'];
        $this->versionMajor = $values['versionMajor'];
        $this->build = $values['build'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
