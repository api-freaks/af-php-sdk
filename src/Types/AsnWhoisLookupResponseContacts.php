<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;
use Apifreaks\Core\Types\ArrayType;

class AsnWhoisLookupResponseContacts extends JsonSerializableType
{
    /**
     * @var array<string> $emailContacts
     */
    #[JsonProperty('emailContacts'), ArrayType(['string'])]
    public array $emailContacts;

    /**
     * @var array<string> $abuseContacts
     */
    #[JsonProperty('abuseContacts'), ArrayType(['string'])]
    public array $abuseContacts;

    /**
     * @param array{
     *   emailContacts: array<string>,
     *   abuseContacts: array<string>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->emailContacts = $values['emailContacts'];
        $this->abuseContacts = $values['abuseContacts'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
