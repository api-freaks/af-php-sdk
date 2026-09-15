<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;
use Apifreaks\Core\Types\ArrayType;

/**
 * Assessment of the domain's ability to send and receive email reliably.
 */
class DomainReputationResponseEmailDeliverability extends JsonSerializableType
{
    /**
     * @var int $score Overall email deliverability score out of 100.
     */
    #[JsonProperty('score')]
    public int $score;

    /**
     * @var string $grade Letter / word grade summarizing the deliverability score.
     */
    #[JsonProperty('grade')]
    public string $grade;

    /**
     * @var bool $canReceiveEmail Indicates whether the domain is configured to receive email.
     */
    #[JsonProperty('can_receive_email')]
    public bool $canReceiveEmail;

    /**
     * @var DomainReputationResponseEmailDeliverabilityAuthentication $authentication Email authentication mechanisms configured for the domain.
     */
    #[JsonProperty('authentication')]
    public DomainReputationResponseEmailDeliverabilityAuthentication $authentication;

    /**
     * @var DomainReputationResponseEmailDeliverabilityInfrastructure $infrastructure Mail server infrastructure backing the domain.
     */
    #[JsonProperty('infrastructure')]
    public DomainReputationResponseEmailDeliverabilityInfrastructure $infrastructure;

    /**
     * @var DomainReputationResponseEmailDeliverabilityReputation $reputation Reputation and trust signals related to the domain's email sending history.
     */
    #[JsonProperty('reputation')]
    public DomainReputationResponseEmailDeliverabilityReputation $reputation;

    /**
     * @var array<DomainReputationResponseEmailDeliverabilityIssuesItem> $issues List of detected email deliverability issues or misconfigurations.
     */
    #[JsonProperty('issues'), ArrayType([DomainReputationResponseEmailDeliverabilityIssuesItem::class])]
    public array $issues;

    /**
     * @param array{
     *   score: int,
     *   grade: string,
     *   canReceiveEmail: bool,
     *   authentication: DomainReputationResponseEmailDeliverabilityAuthentication,
     *   infrastructure: DomainReputationResponseEmailDeliverabilityInfrastructure,
     *   reputation: DomainReputationResponseEmailDeliverabilityReputation,
     *   issues: array<DomainReputationResponseEmailDeliverabilityIssuesItem>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->score = $values['score'];
        $this->grade = $values['grade'];
        $this->canReceiveEmail = $values['canReceiveEmail'];
        $this->authentication = $values['authentication'];
        $this->infrastructure = $values['infrastructure'];
        $this->reputation = $values['reputation'];
        $this->issues = $values['issues'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
