<?php

namespace Apifreaks\Requests;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Types\SwiftCodeFindRequestFormat;

class SwiftCodeFindRequest extends JsonSerializableType
{
    /**
     * @var string $apiKey Your API key
     */
    public string $apiKey;

    /**
     * @var ?value-of<SwiftCodeFindRequestFormat> $format Specify the desired response format. Options: 'json' (default) or 'xml'.
     */
    public ?string $format;

    /**
     * @var ?string $country Country name (accepts full name, e.g., Pakistan, United States). If only the country parameter is supplied, lists all banks in the country.
     */
    public ?string $country;

    /**
     * @var ?string $bank Bank name (upper case) used to filter SWIFT codes. Should be used together with the country parameter. If only country and bank are provided (without city), returns the list of cities for that bank.
     */
    public ?string $bank;

    /**
     * @var ?string $city Gives SWIFT codes for a bank. Optionally specify the city (upper case) to narrow results to a specific city for that bank.
     */
    public ?string $city;

    /**
     * @param array{
     *   apiKey: string,
     *   format?: ?value-of<SwiftCodeFindRequestFormat>,
     *   country?: ?string,
     *   bank?: ?string,
     *   city?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->apiKey = $values['apiKey'];
        $this->format = $values['format'] ?? null;
        $this->country = $values['country'] ?? null;
        $this->bank = $values['bank'] ?? null;
        $this->city = $values['city'] ?? null;
    }
}
