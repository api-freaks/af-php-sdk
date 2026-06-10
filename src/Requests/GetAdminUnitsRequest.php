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
     * @var ?array<string> $adminLevels Comma-separated list to filter results by one or more administrative levels.
     */
    public ?array $adminLevels;

    /**
     * @param array{
     *   apiKey: string,
     *   country: string,
     *   format?: ?value-of<GetAdminUnitsRequestFormat>,
     *   adminLevels?: ?array<string>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->apiKey = $values['apiKey'];
        $this->format = $values['format'] ?? null;
        $this->country = $values['country'];
        $this->adminLevels = $values['adminLevels'] ?? null;
    }
}
