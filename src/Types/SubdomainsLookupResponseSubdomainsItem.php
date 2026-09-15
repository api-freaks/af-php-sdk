<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;

class SubdomainsLookupResponseSubdomainsItem extends JsonSerializableType
{
    /**
     * @var string $subdomain
     */
    #[JsonProperty('subdomain')]
    public string $subdomain;

    /**
     * @var string $firstSeen
     */
    #[JsonProperty('first_seen')]
    public string $firstSeen;

    /**
     * @var ?string $lastSeen
     */
    #[JsonProperty('last_seen')]
    public ?string $lastSeen;

    /**
     * @var ?string $inactiveFrom The date from which the subdomain is considered inactive. Appears only if the subdomain is no longer active.
     */
    #[JsonProperty('inactive_from')]
    public ?string $inactiveFrom;

    /**
     * @param array{
     *   subdomain: string,
     *   firstSeen: string,
     *   lastSeen?: ?string,
     *   inactiveFrom?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->subdomain = $values['subdomain'];
        $this->firstSeen = $values['firstSeen'];
        $this->lastSeen = $values['lastSeen'] ?? null;
        $this->inactiveFrom = $values['inactiveFrom'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
