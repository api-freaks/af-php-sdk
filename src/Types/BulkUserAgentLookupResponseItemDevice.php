<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;

class BulkUserAgentLookupResponseItemDevice extends JsonSerializableType
{
    /**
     * @var string $name Device name or the hardware that was used
     */
    #[JsonProperty('name')]
    public string $name;

    /**
     * Device type or the hardware type. Possible values:
     * 1. Desktop
     * 2. Mobile
     * 3. Tablet
     * 4. Phone
     * 5. Watch
     * 6. Virtual Reality
     * 7. eReader
     * 8. Set-top box
     * 9. TV
     * 10. Game Console
     * 11. Handheld Game Console
     * 12. Voice
     * 13. Robot
     * 14. Robot Mobile
     * 15. Robot Imitator
     * 16. Hacker
     * 17. Anonymized
     * 18. Unknown
     *
     * @var string $type
     */
    #[JsonProperty('type')]
    public string $type;

    /**
     * @var string $brand Device brand or the hardware brand name
     */
    #[JsonProperty('brand')]
    public string $brand;

    /**
     * @var string $cpu Device's CPU model or machine CPU
     */
    #[JsonProperty('cpu')]
    public string $cpu;

    /**
     * @param array{
     *   name: string,
     *   type: string,
     *   brand: string,
     *   cpu: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->name = $values['name'];
        $this->type = $values['type'];
        $this->brand = $values['brand'];
        $this->cpu = $values['cpu'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
