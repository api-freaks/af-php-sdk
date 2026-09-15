<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;

/**
 * Device details.
 */
class BulkGeolocationLookupV2ResponseItemAbuseUserAgentDevice extends JsonSerializableType
{
    /**
     * @var ?string $name Detected device label.
     */
    #[JsonProperty('name')]
    public ?string $name;

    /**
     * @var ?string $type Device category (Desktop, Mobile, Tablet, Bot).
     */
    #[JsonProperty('type')]
    public ?string $type;

    /**
     * @var ?string $brand Device vendor/brand.
     */
    #[JsonProperty('brand')]
    public ?string $brand;

    /**
     * @var ?string $cpu CPU / architecture string.
     */
    #[JsonProperty('cpu')]
    public ?string $cpu;

    /**
     * @param array{
     *   name?: ?string,
     *   type?: ?string,
     *   brand?: ?string,
     *   cpu?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->name = $values['name'] ?? null;
        $this->type = $values['type'] ?? null;
        $this->brand = $values['brand'] ?? null;
        $this->cpu = $values['cpu'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
