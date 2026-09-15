<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;
use DateTime;
use Apifreaks\Core\Types\Date;

class DomainWhoisReverseResponseWhoisDomainsHistoricalItemCompanyname extends JsonSerializableType
{
    /**
     * @var int $num
     */
    #[JsonProperty('num')]
    public int $num;

    /**
     * @var string $domainName
     */
    #[JsonProperty('domain_name')]
    public string $domainName;

    /**
     * @var ?DateTime $createDate
     */
    #[JsonProperty('create_date'), Date(Date::TYPE_DATE)]
    public ?DateTime $createDate;

    /**
     * @var ?DateTime $updateDate
     */
    #[JsonProperty('update_date'), Date(Date::TYPE_DATE)]
    public ?DateTime $updateDate;

    /**
     * @var ?DateTime $expiryDate
     */
    #[JsonProperty('expiry_date'), Date(Date::TYPE_DATE)]
    public ?DateTime $expiryDate;

    /**
     * @var ?string $name
     */
    #[JsonProperty('name')]
    public ?string $name;

    /**
     * @var ?string $email
     */
    #[JsonProperty('email')]
    public ?string $email;

    /**
     * @var ?string $companyname
     */
    #[JsonProperty('companyname')]
    public ?string $companyname;

    /**
     * @param array{
     *   num: int,
     *   domainName: string,
     *   createDate?: ?DateTime,
     *   updateDate?: ?DateTime,
     *   expiryDate?: ?DateTime,
     *   name?: ?string,
     *   email?: ?string,
     *   companyname?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->num = $values['num'];
        $this->domainName = $values['domainName'];
        $this->createDate = $values['createDate'] ?? null;
        $this->updateDate = $values['updateDate'] ?? null;
        $this->expiryDate = $values['expiryDate'] ?? null;
        $this->name = $values['name'] ?? null;
        $this->email = $values['email'] ?? null;
        $this->companyname = $values['companyname'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
