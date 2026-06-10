<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;

class BulkEmailValidateResponseEmailValidationResponsesItem extends JsonSerializableType
{
    /**
     * @var bool $success
     */
    #[JsonProperty('success')]
    public bool $success;

    /**
     * @var string $email
     */
    #[JsonProperty('email')]
    public string $email;

    /**
     * @var ?string $name
     */
    #[JsonProperty('name')]
    public ?string $name;

    /**
     * @var ?string $reason
     */
    #[JsonProperty('reason')]
    public ?string $reason;

    /**
     * @var value-of<BulkEmailValidateResponseEmailValidationResponsesItemValidEmail> $validEmail
     */
    #[JsonProperty('validEmail')]
    public string $validEmail;

    /**
     * @var bool $validSyntax
     */
    #[JsonProperty('validSyntax')]
    public bool $validSyntax;

    /**
     * @var BulkEmailValidateResponseEmailValidationResponsesItemDomain $domain
     */
    #[JsonProperty('domain')]
    public BulkEmailValidateResponseEmailValidationResponsesItemDomain $domain;

    /**
     * @var BulkEmailValidateResponseEmailValidationResponsesItemAccount $account
     */
    #[JsonProperty('account')]
    public BulkEmailValidateResponseEmailValidationResponsesItemAccount $account;

    /**
     * @var BulkEmailValidateResponseEmailValidationResponsesItemDns $dns
     */
    #[JsonProperty('dns')]
    public BulkEmailValidateResponseEmailValidationResponsesItemDns $dns;

    /**
     * @var ?string $ip
     */
    #[JsonProperty('ip')]
    public ?string $ip;

    /**
     * @var ?BulkEmailValidateResponseEmailValidationResponsesItemAddress $address
     */
    #[JsonProperty('address')]
    public ?BulkEmailValidateResponseEmailValidationResponsesItemAddress $address;

    /**
     * @param array{
     *   success: bool,
     *   email: string,
     *   validEmail: value-of<BulkEmailValidateResponseEmailValidationResponsesItemValidEmail>,
     *   validSyntax: bool,
     *   domain: BulkEmailValidateResponseEmailValidationResponsesItemDomain,
     *   account: BulkEmailValidateResponseEmailValidationResponsesItemAccount,
     *   dns: BulkEmailValidateResponseEmailValidationResponsesItemDns,
     *   name?: ?string,
     *   reason?: ?string,
     *   ip?: ?string,
     *   address?: ?BulkEmailValidateResponseEmailValidationResponsesItemAddress,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->success = $values['success'];
        $this->email = $values['email'];
        $this->name = $values['name'] ?? null;
        $this->reason = $values['reason'] ?? null;
        $this->validEmail = $values['validEmail'];
        $this->validSyntax = $values['validSyntax'];
        $this->domain = $values['domain'];
        $this->account = $values['account'];
        $this->dns = $values['dns'];
        $this->ip = $values['ip'] ?? null;
        $this->address = $values['address'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
