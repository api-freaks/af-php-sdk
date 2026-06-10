<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;

class BulkUserAgentLookupResponseItem extends JsonSerializableType
{
    /**
     * @var string $userAgentString User-agent string that is parsed for browser, device and operating system details.
     */
    #[JsonProperty('user_agent_string')]
    public string $userAgentString;

    /**
     * @var string $name Agent name or the actual browser name that was used.
     */
    #[JsonProperty('name')]
    public string $name;

    /**
     * Agent type or the browser type that was used. Possible values:
     * 1. Browser
     * 2. Browser Webview
     * 3. Mobile App
     * 4. Robot Mobile
     * 5. Cloud Application
     * 6. Email Client
     * 7. Voice
     * 8. Special
     * 9. Testclient
     * 10. Hacker
     * 11. Unknown
     *
     * @var string $type
     */
    #[JsonProperty('type')]
    public string $type;

    /**
     * @var string $version Agent version or the browser version
     */
    #[JsonProperty('version')]
    public string $version;

    /**
     * @var string $versionMajor Agent version major or the browser version major
     */
    #[JsonProperty('version_major')]
    public string $versionMajor;

    /**
     * @var BulkUserAgentLookupResponseItemDevice $device
     */
    #[JsonProperty('device')]
    public BulkUserAgentLookupResponseItemDevice $device;

    /**
     * @var BulkUserAgentLookupResponseItemEngine $engine
     */
    #[JsonProperty('engine')]
    public BulkUserAgentLookupResponseItemEngine $engine;

    /**
     * @var BulkUserAgentLookupResponseItemOperatingSystem $operatingSystem
     */
    #[JsonProperty('operating_system')]
    public BulkUserAgentLookupResponseItemOperatingSystem $operatingSystem;

    /**
     * @var ?string $message Error message for this user-agent string, present only if parsing of this entry failed.
     */
    #[JsonProperty('message')]
    public ?string $message;

    /**
     * @param array{
     *   userAgentString: string,
     *   name: string,
     *   type: string,
     *   version: string,
     *   versionMajor: string,
     *   device: BulkUserAgentLookupResponseItemDevice,
     *   engine: BulkUserAgentLookupResponseItemEngine,
     *   operatingSystem: BulkUserAgentLookupResponseItemOperatingSystem,
     *   message?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->userAgentString = $values['userAgentString'];
        $this->name = $values['name'];
        $this->type = $values['type'];
        $this->version = $values['version'];
        $this->versionMajor = $values['versionMajor'];
        $this->device = $values['device'];
        $this->engine = $values['engine'];
        $this->operatingSystem = $values['operatingSystem'];
        $this->message = $values['message'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
