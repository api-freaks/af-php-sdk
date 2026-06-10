<?php

namespace Apifreaks\Requests;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Types\GetAdminUnitDetailsRequestFormat;

class GetAdminUnitDetailsRequest extends JsonSerializableType
{
    /**
     * @var string $apiKey Your API key
     */
    public string $apiKey;

    /**
     * @var ?value-of<GetAdminUnitDetailsRequestFormat> $format Format of the response.
     */
    public ?string $format;

    /**
     * @var string $country Country code in ISO 3166-1 alpha-2 format.
     */
    public string $country;

    /**
     * @var string $adminUnit Optional admin code to fetch details for a specific administrative unit.
     */
    public string $adminUnit;

    /**
     * @param array{
     *   apiKey: string,
     *   country: string,
     *   adminUnit: string,
     *   format?: ?value-of<GetAdminUnitDetailsRequestFormat>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->apiKey = $values['apiKey'];
        $this->format = $values['format'] ?? null;
        $this->country = $values['country'];
        $this->adminUnit = $values['adminUnit'];
    }
}
