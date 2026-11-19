<?php

namespace Apifreaks\Requests;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Types\GetAdminUnitsRequestFormat;

class GetAdminUnitsRequest extends JsonSerializableType
{
    /**
     * @var string $apiKey Your API key
     */
    public string $apiKey;

    /**
     * @var ?value-of<GetAdminUnitsRequestFormat> $format Format of the response.
     */
    public ?string $format;

    /**
     * @var string $country Country code in ISO 3166-1 alpha-2 format.
     */
    public string $country;

    /**
     * @var ?array<string> $adminLevel Filter results by one or more administrative level names (e.g. `land`, `state`, `province`), sent as a comma-separated list. Use the admin levels endpoint to list the levels a country has.
     */
    public ?array $adminLevel;

    /**
     * @param array{
     *   apiKey: string,
     *   country: string,
     *   format?: ?value-of<GetAdminUnitsRequestFormat>,
     *   adminLevel?: ?array<string>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->apiKey = $values['apiKey'];
        $this->format = $values['format'] ?? null;
        $this->country = $values['country'];
        $this->adminLevel = $values['adminLevel'] ?? null;
    }
}
