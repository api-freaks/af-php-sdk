<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;

class UserAgentLookupResponseEngine extends JsonSerializableType
{
    /**
     * @var string $name Layout engine name or the underlying core that converts the HTML into visual
     */
    #[JsonProperty('name')]
    public string $name;

    /**
     * Layout engine type. Possible values:
     * 1. Browser
     * 2. Mobile App
     * 3. Hacker
     * 4. Robot
     * 5. Unknown
     *
     * @var string $type
     */
    #[JsonProperty('type')]
    public string $type;

    /**
     * @var string $version Layout engine version
     */
    #[JsonProperty('version')]
    public string $version;

    /**
     * @var string $versionMajor Layout engine version major
     */
    #[JsonProperty('version_major')]
    public string $versionMajor;

    /**
     * @param array{
     *   name: string,
     *   type: string,
     *   version: string,
     *   versionMajor: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->name = $values['name'];
        $this->type = $values['type'];
        $this->version = $values['version'];
        $this->versionMajor = $values['versionMajor'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
