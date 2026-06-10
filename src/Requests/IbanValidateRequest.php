<?php

namespace Apifreaks\Requests;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Types\IbanValidateRequestFormat;

class IbanValidateRequest extends JsonSerializableType
{
    /**
     * @var string $apiKey Your API key
     */
    public string $apiKey;

    /**
     * @var ?value-of<IbanValidateRequestFormat> $format Specify the desired response format. Options: 'json' (default) or 'xml'.
     */
    public ?string $format;

    /**
     * @var string $iban IBAN to validate.
     */
    public string $iban;

    /**
     * @param array{
     *   apiKey: string,
     *   iban: string,
     *   format?: ?value-of<IbanValidateRequestFormat>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->apiKey = $values['apiKey'];
        $this->format = $values['format'] ?? null;
        $this->iban = $values['iban'];
    }
}
