<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;

/**
 * Network information for the IP.
 */
class BulkGeolocationLookupV2ResponseItemAbuseNetwork extends JsonSerializableType
{
    /**
     * @var ?string $connectionType Network access type classification (e.g., DSL, Cable, Mobile, 5G) when available.
     */
    #[JsonProperty('connection_type')]
    public ?string $connectionType;

    /**
     * @var ?string $route Network prefix in CIDR notation that contains the IP.
     */
    #[JsonProperty('route')]
    public ?string $route;

    /**
     * @var ?bool $isAnycast true if the IP is anycast (same IP announced from multiple locations).
     */
    #[JsonProperty('is_anycast')]
    public ?bool $isAnycast;

    /**
     * @var ?string $cdnProviderName CDN provider name (e.g. Cloudflare) when is_cdn is true; empty otherwise.
     */
    #[JsonProperty('cdn_provider_name')]
    public ?string $cdnProviderName;

    /**
     * @var ?bool $isCdn true if the IP belongs to a content delivery network (CDN) or a cloud provider's network.
     */
    #[JsonProperty('is_cdn')]
    public ?bool $isCdn;

    /**
     * @param array{
     *   connectionType?: ?string,
     *   route?: ?string,
     *   isAnycast?: ?bool,
     *   cdnProviderName?: ?string,
     *   isCdn?: ?bool,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->connectionType = $values['connectionType'] ?? null;
        $this->route = $values['route'] ?? null;
        $this->isAnycast = $values['isAnycast'] ?? null;
        $this->cdnProviderName = $values['cdnProviderName'] ?? null;
        $this->isCdn = $values['isCdn'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
