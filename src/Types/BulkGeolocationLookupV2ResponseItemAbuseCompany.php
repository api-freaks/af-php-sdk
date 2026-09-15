<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;

/**
 * Company or ISP information mapped to the IP address.
 */
class BulkGeolocationLookupV2ResponseItemAbuseCompany extends JsonSerializableType
{
    /**
     * @var ?string $name Company name mapped to the IP.
     */
    #[JsonProperty('name')]
    public ?string $name;

    /**
     * @var ?string $type Company category (ISP, HOSTING, BUSINESS, etc.).
     */
    #[JsonProperty('type')]
    public ?string $type;

    /**
     * @var ?string $domain Company domain name.
     */
    #[JsonProperty('domain')]
    public ?string $domain;

    /**
     * @param array{
     *   name?: ?string,
     *   type?: ?string,
     *   domain?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->name = $values['name'] ?? null;
        $this->type = $values['type'] ?? null;
        $this->domain = $values['domain'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
