<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;
use Apifreaks\Core\Types\ArrayType;
use DateTime;
use Apifreaks\Core\Types\Date;

/**
 * BGP route object containing the route prefix, origin AS, and related metadata.
 */
class IpWhoisLookupResponseRoutesItem extends JsonSerializableType
{
    /**
     * @var ?string $route BGP route prefix (e.g., 8.8.8.0/24).
     */
    #[JsonProperty('route')]
    public ?string $route;

    /**
     * @var ?string $origin Origin AS number for this route.
     */
    #[JsonProperty('origin')]
    public ?string $origin;

    /**
     * @var ?array<string> $description Description values for this route object.
     */
    #[JsonProperty('description'), ArrayType(['string'])]
    public ?array $description;

    /**
     * @var ?string $country Country of the organization managing this route.
     */
    #[JsonProperty('country')]
    public ?string $country;

    /**
     * @var ?array<string> $pingable Pingable IP addresses in this route.
     */
    #[JsonProperty('pingable'), ArrayType(['string'])]
    public ?array $pingable;

    /**
     * @var ?array<string> $pingHdl Handles of pingable contacts for this route.
     */
    #[JsonProperty('ping_hdl'), ArrayType(['string'])]
    public ?array $pingHdl;

    /**
     * @var ?array<string> $holes Sub-allocation holes (more specific routes) within this route.
     */
    #[JsonProperty('holes'), ArrayType(['string'])]
    public ?array $holes;

    /**
     * @var ?array<string> $memberOf Route sets this route is a member of.
     */
    #[JsonProperty('member_of'), ArrayType(['string'])]
    public ?array $memberOf;

    /**
     * @var ?array<string> $inject Injection details for this route.
     */
    #[JsonProperty('inject'), ArrayType(['string'])]
    public ?array $inject;

    /**
     * @var ?string $aggrMtd Aggregation method for this route.
     */
    #[JsonProperty('aggr_mtd')]
    public ?string $aggrMtd;

    /**
     * @var ?string $aggrBndry Aggregation boundary for this route.
     */
    #[JsonProperty('aggr_bndry')]
    public ?string $aggrBndry;

    /**
     * @var ?string $exportComps Export composition for this route.
     */
    #[JsonProperty('export_comps')]
    public ?string $exportComps;

    /**
     * @var ?string $components Route components.
     */
    #[JsonProperty('components')]
    public ?string $components;

    /**
     * @var ?array<string> $organizations Handles of organization objects related to this route.
     */
    #[JsonProperty('organizations'), ArrayType(['string'])]
    public ?array $organizations;

    /**
     * @var ?array<string> $remarks Remarks for this route object.
     */
    #[JsonProperty('remarks'), ArrayType(['string'])]
    public ?array $remarks;

    /**
     * @var ?array<string> $notify Notify email addresses for this route object.
     */
    #[JsonProperty('notify'), ArrayType(['string'])]
    public ?array $notify;

    /**
     * @var ?array<string> $mntLower Lower-level maintainer handles for this route.
     */
    #[JsonProperty('mnt_lower'), ArrayType(['string'])]
    public ?array $mntLower;

    /**
     * @var ?array<string> $mntBy Maintainer handles for this route object.
     */
    #[JsonProperty('mnt_by'), ArrayType(['string'])]
    public ?array $mntBy;

    /**
     * @var ?DateTime $dateCreated Registration date of this route object (YYYY-MM-DD).
     */
    #[JsonProperty('date_created'), Date(Date::TYPE_DATE)]
    public ?DateTime $dateCreated;

    /**
     * @var ?DateTime $dateUpdated Last update date of this route object (YYYY-MM-DD).
     */
    #[JsonProperty('date_updated'), Date(Date::TYPE_DATE)]
    public ?DateTime $dateUpdated;

    /**
     * @var ?string $source WHOIS data source for this route object.
     */
    #[JsonProperty('source')]
    public ?string $source;

    /**
     * @param array{
     *   route?: ?string,
     *   origin?: ?string,
     *   description?: ?array<string>,
     *   country?: ?string,
     *   pingable?: ?array<string>,
     *   pingHdl?: ?array<string>,
     *   holes?: ?array<string>,
     *   memberOf?: ?array<string>,
     *   inject?: ?array<string>,
     *   aggrMtd?: ?string,
     *   aggrBndry?: ?string,
     *   exportComps?: ?string,
     *   components?: ?string,
     *   organizations?: ?array<string>,
     *   remarks?: ?array<string>,
     *   notify?: ?array<string>,
     *   mntLower?: ?array<string>,
     *   mntBy?: ?array<string>,
     *   dateCreated?: ?DateTime,
     *   dateUpdated?: ?DateTime,
     *   source?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->route = $values['route'] ?? null;
        $this->origin = $values['origin'] ?? null;
        $this->description = $values['description'] ?? null;
        $this->country = $values['country'] ?? null;
        $this->pingable = $values['pingable'] ?? null;
        $this->pingHdl = $values['pingHdl'] ?? null;
        $this->holes = $values['holes'] ?? null;
        $this->memberOf = $values['memberOf'] ?? null;
        $this->inject = $values['inject'] ?? null;
        $this->aggrMtd = $values['aggrMtd'] ?? null;
        $this->aggrBndry = $values['aggrBndry'] ?? null;
        $this->exportComps = $values['exportComps'] ?? null;
        $this->components = $values['components'] ?? null;
        $this->organizations = $values['organizations'] ?? null;
        $this->remarks = $values['remarks'] ?? null;
        $this->notify = $values['notify'] ?? null;
        $this->mntLower = $values['mntLower'] ?? null;
        $this->mntBy = $values['mntBy'] ?? null;
        $this->dateCreated = $values['dateCreated'] ?? null;
        $this->dateUpdated = $values['dateUpdated'] ?? null;
        $this->source = $values['source'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
