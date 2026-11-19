<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;

/**
 * Disposable email check response.
 */
class DisposableEmailCheckV2Response extends JsonSerializableType
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
     * @var DisposableEmailCheckV2ResponseDomain $domain Domain-level disposable/spam/free classification for the email address.
     */
    #[JsonProperty('domain')]
    public DisposableEmailCheckV2ResponseDomain $domain;

    /**
     * @var ?DisposableEmailCheckV2ResponseAccount $account Account-level detection details. Omitted entirely when validSyntax is false.
     */
    #[JsonProperty('account')]
    public ?DisposableEmailCheckV2ResponseAccount $account;

    /**
     * @var ?DisposableEmailCheckV2ResponseDns $dns DNS records for the email domain. Omitted entirely when validSyntax is false or the domain does not exist (NXDOMAIN).
     */
    #[JsonProperty('dns')]
    public ?DisposableEmailCheckV2ResponseDns $dns;

    /**
     * @var ?string $ip The IP address that was looked up.
     */
    #[JsonProperty('ip')]
    public ?string $ip;

    /**
     * @var ?DisposableEmailCheckV2ResponseAddress $address Geolocation and security enrichment data for the IP address.
     */
    #[JsonProperty('address')]
    public ?DisposableEmailCheckV2ResponseAddress $address;

    /**
     * @param array{
     *   email: string,
     *   validSyntax: bool,
     *   domain: DisposableEmailCheckV2ResponseDomain,
     *   account?: ?DisposableEmailCheckV2ResponseAccount,
     *   dns?: ?DisposableEmailCheckV2ResponseDns,
     *   ip?: ?string,
     *   address?: ?DisposableEmailCheckV2ResponseAddress,
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
