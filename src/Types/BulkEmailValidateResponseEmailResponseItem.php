<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;

class BulkEmailValidateResponseEmailResponseItem extends JsonSerializableType
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
     * @var value-of<BulkEmailValidateResponseEmailResponseItemValidEmail> $validEmail
     */
    #[JsonProperty('validEmail')]
    public string $validEmail;

    /**
     * @var bool $validSyntax
     */
    #[JsonProperty('validSyntax')]
    public bool $validSyntax;

    /**
     * @var BulkEmailValidateResponseEmailResponseItemDomain $domain
     */
    #[JsonProperty('domain')]
    public BulkEmailValidateResponseEmailResponseItemDomain $domain;

    /**
     * @var BulkEmailValidateResponseEmailResponseItemAccount $account
     */
    #[JsonProperty('account')]
    public BulkEmailValidateResponseEmailResponseItemAccount $account;

    /**
     * @var BulkEmailValidateResponseEmailResponseItemDns $dns
     */
    #[JsonProperty('dns')]
    public BulkEmailValidateResponseEmailResponseItemDns $dns;

    /**
     * @var ?string $ip
     */
    #[JsonProperty('ip')]
    public ?string $ip;

    /**
     * @var ?BulkEmailValidateResponseEmailResponseItemAddress $address
     */
    #[JsonProperty('address')]
    public ?BulkEmailValidateResponseEmailResponseItemAddress $address;

    /**
     * @param array{
     *   success: bool,
     *   email: string,
     *   validEmail: value-of<BulkEmailValidateResponseEmailResponseItemValidEmail>,
     *   validSyntax: bool,
     *   domain: BulkEmailValidateResponseEmailResponseItemDomain,
     *   account: BulkEmailValidateResponseEmailResponseItemAccount,
     *   dns: BulkEmailValidateResponseEmailResponseItemDns,
     *   name?: ?string,
     *   reason?: ?string,
     *   ip?: ?string,
     *   address?: ?BulkEmailValidateResponseEmailResponseItemAddress,
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
