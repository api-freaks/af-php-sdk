<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;

class EmailValidateResponse extends JsonSerializableType
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
     * @var value-of<EmailValidateResponseValidEmail> $validEmail
     */
    #[JsonProperty('validEmail')]
    public string $validEmail;

    /**
     * @var bool $validSyntax
     */
    #[JsonProperty('validSyntax')]
    public bool $validSyntax;

    /**
     * @var EmailValidateResponseDomain $domain
     */
    #[JsonProperty('domain')]
    public EmailValidateResponseDomain $domain;

    /**
     * @var EmailValidateResponseAccount $account
     */
    #[JsonProperty('account')]
    public EmailValidateResponseAccount $account;

    /**
     * @var EmailValidateResponseDns $dns
     */
    #[JsonProperty('dns')]
    public EmailValidateResponseDns $dns;

    /**
     * @var ?string $ip
     */
    #[JsonProperty('ip')]
    public ?string $ip;

    /**
     * @var ?EmailValidateResponseAddress $address
     */
    #[JsonProperty('address')]
    public ?EmailValidateResponseAddress $address;

    /**
     * @param array{
     *   success: bool,
     *   email: string,
     *   validEmail: value-of<EmailValidateResponseValidEmail>,
     *   validSyntax: bool,
     *   domain: EmailValidateResponseDomain,
     *   account: EmailValidateResponseAccount,
     *   dns: EmailValidateResponseDns,
     *   name?: ?string,
     *   reason?: ?string,
     *   ip?: ?string,
     *   address?: ?EmailValidateResponseAddress,
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
