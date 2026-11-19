<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;

class CurrencySupportedResponseSupportedCurrenciesMapValue extends JsonSerializableType
{
    /**
     * @var string $currencyCode
     */
    #[JsonProperty('currencyCode')]
    public string $currencyCode;

    /**
     * @var ?string $currencyName Currency name; null for some entries (e.g. crypto tokens).
     */
    #[JsonProperty('currencyName')]
    public ?string $currencyName;

    /**
     * @var ?string $countryCode Country code; null for currencies not tied to a country.
     */
    #[JsonProperty('countryCode')]
    public ?string $countryCode;

    /**
     * @var ?string $countryName Country name; null for currencies not tied to a country.
     */
    #[JsonProperty('countryName')]
    public ?string $countryName;

    /**
     * @var value-of<CurrencySupportedResponseSupportedCurrenciesMapValueStatus> $status
     */
    #[JsonProperty('status')]
    public string $status;

    /**
     * @var string $availableFrom
     */
    #[JsonProperty('availableFrom')]
    public string $availableFrom;

    /**
     * @var string $availableUntil
     */
    #[JsonProperty('availableUntil')]
    public string $availableUntil;

    /**
     * @var string $icon
     */
    #[JsonProperty('icon')]
    public string $icon;

    /**
     * @param array{
     *   currencyCode: string,
     *   status: value-of<CurrencySupportedResponseSupportedCurrenciesMapValueStatus>,
     *   availableFrom: string,
     *   availableUntil: string,
     *   icon: string,
     *   currencyName?: ?string,
     *   countryCode?: ?string,
     *   countryName?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->currencyCode = $values['currencyCode'];
        $this->currencyName = $values['currencyName'] ?? null;
        $this->countryCode = $values['countryCode'] ?? null;
        $this->countryName = $values['countryName'] ?? null;
        $this->status = $values['status'];
        $this->availableFrom = $values['availableFrom'];
        $this->availableUntil = $values['availableUntil'];
        $this->icon = $values['icon'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
