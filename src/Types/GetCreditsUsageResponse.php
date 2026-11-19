<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;

/**
 * Credit balances for the organization's subscription, subscription surcharge, and one-off purchases.
 */
class GetCreditsUsageResponse extends JsonSerializableType
{
    /**
     * @var string $apiKey The API key the credit balances belong to.
     */
    #[JsonProperty('apiKey')]
    public string $apiKey;

    /**
     * @var value-of<GetCreditsUsageResponseUserStatus> $userStatus Status of the user account.
     */
    #[JsonProperty('userStatus')]
    public string $userStatus;

    /**
     * @var ?bool $subActive Whether a subscription plan is currently active. Null if the account has no subscription.
     */
    #[JsonProperty('subActive')]
    public ?bool $subActive;

    /**
     * @var ?value-of<GetCreditsUsageResponseSubStatus> $subStatus Status of the subscription credits. Null if the account has no subscription.
     */
    #[JsonProperty('subStatus')]
    public ?string $subStatus;

    /**
     * @var ?int $subAllowedCredits Total credits allowed under the subscription plan. Null if the account has no subscription.
     */
    #[JsonProperty('subAllowedCredits')]
    public ?int $subAllowedCredits;

    /**
     * @var ?int $subUsedCredits Credits consumed under the subscription plan. Null if the account has no subscription.
     */
    #[JsonProperty('subUsedCredits')]
    public ?int $subUsedCredits;

    /**
     * @var ?value-of<GetCreditsUsageResponseSubSurchargeStatus> $subSurchargeStatus Status of the subscription surcharge (overage) credits. Null if the account has no subscription.
     */
    #[JsonProperty('subSurchargeStatus')]
    public ?string $subSurchargeStatus;

    /**
     * @var ?int $subSurchargeAllowedCredits Total surcharge credits allowed. Null if the account has no subscription.
     */
    #[JsonProperty('subSurchargeAllowedCredits')]
    public ?int $subSurchargeAllowedCredits;

    /**
     * @var ?int $subSurchargeUsedCredits Surcharge credits consumed. Null if the account has no subscription.
     */
    #[JsonProperty('subSurchargeUsedCredits')]
    public ?int $subSurchargeUsedCredits;

    /**
     * @var ?bool $subSurchargeAllowed Whether surcharge (overage) usage is allowed on the subscription. Null if the account has no subscription.
     */
    #[JsonProperty('subSurchargeAllowed')]
    public ?bool $subSurchargeAllowed;

    /**
     * @var bool $oneOffCreditsActive Whether the account has active one-off (pay-as-you-go) credits.
     */
    #[JsonProperty('oneOffCreditsActive')]
    public bool $oneOffCreditsActive;

    /**
     * @var int $oneOffAllowedCredits Total one-off credits purchased.
     */
    #[JsonProperty('oneOffAllowedCredits')]
    public int $oneOffAllowedCredits;

    /**
     * @var int $oneOffUsedCredits One-off credits consumed.
     */
    #[JsonProperty('oneOffUsedCredits')]
    public int $oneOffUsedCredits;

    /**
     * @param array{
     *   apiKey: string,
     *   userStatus: value-of<GetCreditsUsageResponseUserStatus>,
     *   oneOffCreditsActive: bool,
     *   oneOffAllowedCredits: int,
     *   oneOffUsedCredits: int,
     *   subActive?: ?bool,
     *   subStatus?: ?value-of<GetCreditsUsageResponseSubStatus>,
     *   subAllowedCredits?: ?int,
     *   subUsedCredits?: ?int,
     *   subSurchargeStatus?: ?value-of<GetCreditsUsageResponseSubSurchargeStatus>,
     *   subSurchargeAllowedCredits?: ?int,
     *   subSurchargeUsedCredits?: ?int,
     *   subSurchargeAllowed?: ?bool,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->apiKey = $values['apiKey'];
        $this->userStatus = $values['userStatus'];
        $this->subActive = $values['subActive'] ?? null;
        $this->subStatus = $values['subStatus'] ?? null;
        $this->subAllowedCredits = $values['subAllowedCredits'] ?? null;
        $this->subUsedCredits = $values['subUsedCredits'] ?? null;
        $this->subSurchargeStatus = $values['subSurchargeStatus'] ?? null;
        $this->subSurchargeAllowedCredits = $values['subSurchargeAllowedCredits'] ?? null;
        $this->subSurchargeUsedCredits = $values['subSurchargeUsedCredits'] ?? null;
        $this->subSurchargeAllowed = $values['subSurchargeAllowed'] ?? null;
        $this->oneOffCreditsActive = $values['oneOffCreditsActive'];
        $this->oneOffAllowedCredits = $values['oneOffAllowedCredits'];
        $this->oneOffUsedCredits = $values['oneOffUsedCredits'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
