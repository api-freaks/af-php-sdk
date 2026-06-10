<?php

namespace Apifreaks\Requests;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Types\GetSubregionsRequestFormat;

class GetSubregionsRequest extends JsonSerializableType
{
    /**
     * @var string $apiKey Your API key
     */
    public string $apiKey;

    /**
     * @var ?value-of<GetSubregionsRequestFormat> $format Format of the response
     */
    public ?string $format;

    /**
     * @var string $region Name of the region.
     */
    public string $region;

    /**
     * @param array{
     *   apiKey: string,
     *   region: string,
     *   format?: ?value-of<GetSubregionsRequestFormat>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->apiKey = $values['apiKey'];
        $this->format = $values['format'] ?? null;
        $this->region = $values['region'];
    }
}
