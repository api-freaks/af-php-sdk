<?php

namespace Apifreaks\Requests;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Types\VatValidateRequestFormat;

class VatValidateRequest extends JsonSerializableType
{
    /**
     * @var string $apiKey Your API key
     */
    public string $apiKey;

    /**
     * @var ?value-of<VatValidateRequestFormat> $format Specify the desired response format. Options: 'json' (default) or 'xml'.
     */
    public ?string $format;

    /**
     * @var string $vatNumber EU or UK VAT number to validate.
     */
    public string $vatNumber;

    /**
     * @var ?string $requesterVatNumber Requester EU or UK VAT number.
     */
    public ?string $requesterVatNumber;

    /**
     * @param array{
     *   apiKey: string,
     *   vatNumber: string,
     *   format?: ?value-of<VatValidateRequestFormat>,
     *   requesterVatNumber?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->apiKey = $values['apiKey'];
        $this->format = $values['format'] ?? null;
        $this->vatNumber = $values['vatNumber'];
        $this->requesterVatNumber = $values['requesterVatNumber'] ?? null;
    }
}
