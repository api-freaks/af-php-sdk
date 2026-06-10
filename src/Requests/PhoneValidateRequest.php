<?php

namespace Apifreaks\Requests;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Types\PhoneValidateRequestFormat;
use Apifreaks\Core\Json\JsonProperty;

class PhoneValidateRequest extends JsonSerializableType
{
    /**
     * @var string $apiKey Your API key
     */
    public string $apiKey;

    /**
     * @var ?value-of<PhoneValidateRequestFormat> $format Specifies the desired format for the API response. Choose 'json' for a JSON object. If not provided, the API defaults to JSON format.
     */
    public ?string $format;

    /**
     * @var string $number Phone number to validate. Accepts international format (+14155552671), local format (4155552671) with region, or IDD format (0014155552671) with dialer_region.
     */
    #[JsonProperty('number')]
    public string $number;

    /**
     * @var ?string $region Two-letter ISO country code (e.g., US, GB). Required when number is in local format without + prefix. Cannot be used together with dialer_region.
     */
    #[JsonProperty('region')]
    public ?string $region;

    /**
     * @var ?string $dialerRegion Two-letter ISO country code indicating the country the number is being dialed from. Required when number uses IDD exit code. Cannot be used together with region.
     */
    #[JsonProperty('dialer_region')]
    public ?string $dialerRegion;

    /**
     * @param array{
     *   apiKey: string,
     *   number: string,
     *   format?: ?value-of<PhoneValidateRequestFormat>,
     *   region?: ?string,
     *   dialerRegion?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->apiKey = $values['apiKey'];
        $this->format = $values['format'] ?? null;
        $this->number = $values['number'];
        $this->region = $values['region'] ?? null;
        $this->dialerRegion = $values['dialerRegion'] ?? null;
    }
}
