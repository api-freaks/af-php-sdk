<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;

/**
 * Domain eligibility information (populated for TLDs with registrant eligibility requirements, e.g. .eu).
 */
class BulkDomainWhoisLookupV2ResponseBulkWhoisResponseItemAbuseContactEligibilityInfo extends JsonSerializableType
{
    /**
     * @var ?string $id Eligibility ID.
     */
    #[JsonProperty('id')]
    public ?string $id;

    /**
     * @var ?string $name Eligibility name.
     */
    #[JsonProperty('name')]
    public ?string $name;

    /**
     * @var ?string $type Eligibility type.
     */
    #[JsonProperty('type')]
    public ?string $type;

    /**
     * @param array{
     *   id?: ?string,
     *   name?: ?string,
     *   type?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->id = $values['id'] ?? null;
        $this->name = $values['name'] ?? null;
        $this->type = $values['type'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
