<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;

/**
 * Disposable email check result for a single item in the bulk request.
 */
class BulkDisposableEmailCheckV2ResponseDisposableEmailResponseItem extends JsonSerializableType
{
    /**
     * @var string $email The email address submitted for the check.
     */
    #[JsonProperty('email')]
    public string $email;

    /**
     * @var bool $validSyntax Validates email address format compliance with RFC 5322 standards. When false, domain only contains name/validDomain and account/dns are omitted entirely.
     */
    #[JsonProperty('validSyntax')]
    public bool $validSyntax;

    /**
     * @var BulkDisposableEmailCheckV2ResponseDisposableEmailResponseItemDomain $domain Domain-level disposable/spam/free classification for the email address.
     */
    #[JsonProperty('domain')]
    public BulkDisposableEmailCheckV2ResponseDisposableEmailResponseItemDomain $domain;

    /**
     * @var ?BulkDisposableEmailCheckV2ResponseDisposableEmailResponseItemAccount $account Account-level detection details. Omitted entirely when validSyntax is false.
     */
    #[JsonProperty('account')]
    public ?BulkDisposableEmailCheckV2ResponseDisposableEmailResponseItemAccount $account;

    /**
     * @var ?BulkDisposableEmailCheckV2ResponseDisposableEmailResponseItemDns $dns DNS records for the email domain. Omitted entirely when validSyntax is false or the domain does not exist (NXDOMAIN).
     */
    #[JsonProperty('dns')]
    public ?BulkDisposableEmailCheckV2ResponseDisposableEmailResponseItemDns $dns;

    /**
     * @var ?string $ip The IP address that was looked up.
     */
    #[JsonProperty('ip')]
    public ?string $ip;

    /**
     * @var ?BulkDisposableEmailCheckV2ResponseDisposableEmailResponseItemAddress $address Geolocation and security enrichment data for the IP address.
     */
    #[JsonProperty('address')]
    public ?BulkDisposableEmailCheckV2ResponseDisposableEmailResponseItemAddress $address;

    /**
     * @param array{
     *   email: string,
     *   validSyntax: bool,
     *   domain: BulkDisposableEmailCheckV2ResponseDisposableEmailResponseItemDomain,
     *   account?: ?BulkDisposableEmailCheckV2ResponseDisposableEmailResponseItemAccount,
     *   dns?: ?BulkDisposableEmailCheckV2ResponseDisposableEmailResponseItemDns,
     *   ip?: ?string,
     *   address?: ?BulkDisposableEmailCheckV2ResponseDisposableEmailResponseItemAddress,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->email = $values['email'];
        $this->validSyntax = $values['validSyntax'];
        $this->domain = $values['domain'];
        $this->account = $values['account'] ?? null;
        $this->dns = $values['dns'] ?? null;
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
