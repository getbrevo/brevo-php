<?php

namespace Brevo\TransactionalSms\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;

class GetTransacAggregatedSmsReportResponse extends JsonSerializableType
{
    /**
     * @var ?int $accepted Number of accepted SMS for the timeframe
     */
    #[JsonProperty('accepted')]
    public ?int $accepted;

    /**
     * @var ?int $blocked Number of blocked contact for the timeframe
     */
    #[JsonProperty('blocked')]
    public ?int $blocked;

    /**
     * @var ?int $delivered Number of delivered SMS for the timeframe
     */
    #[JsonProperty('delivered')]
    public ?int $delivered;

    /**
     * @var ?int $hardBounces Number of hardbounces for the timeframe
     */
    #[JsonProperty('hardBounces')]
    public ?int $hardBounces;

    /**
     * @var ?string $range Time frame of the report
     */
    #[JsonProperty('range')]
    public ?string $range;

    /**
     * @var ?int $rejected Number of rejected SMS for the timeframe
     */
    #[JsonProperty('rejected')]
    public ?int $rejected;

    /**
     * @var ?int $replied Number of answered SMS for the timeframe
     */
    #[JsonProperty('replied')]
    public ?int $replied;

    /**
     * @var ?int $requests Number of requests for the timeframe
     */
    #[JsonProperty('requests')]
    public ?int $requests;

    /**
     * @var ?int $skipped Number of skipped SMS for the timeframe
     */
    #[JsonProperty('skipped')]
    public ?int $skipped;

    /**
     * @var ?int $softBounces Number of softbounces for the timeframe
     */
    #[JsonProperty('softBounces')]
    public ?int $softBounces;

    /**
     * @var ?int $unsubscribed Number of unsubscription for the timeframe
     */
    #[JsonProperty('unsubscribed')]
    public ?int $unsubscribed;

    /**
     * @param array{
     *   accepted?: ?int,
     *   blocked?: ?int,
     *   delivered?: ?int,
     *   hardBounces?: ?int,
     *   range?: ?string,
     *   rejected?: ?int,
     *   replied?: ?int,
     *   requests?: ?int,
     *   skipped?: ?int,
     *   softBounces?: ?int,
     *   unsubscribed?: ?int,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->accepted = $values['accepted'] ?? null;
        $this->blocked = $values['blocked'] ?? null;
        $this->delivered = $values['delivered'] ?? null;
        $this->hardBounces = $values['hardBounces'] ?? null;
        $this->range = $values['range'] ?? null;
        $this->rejected = $values['rejected'] ?? null;
        $this->replied = $values['replied'] ?? null;
        $this->requests = $values['requests'] ?? null;
        $this->skipped = $values['skipped'] ?? null;
        $this->softBounces = $values['softBounces'] ?? null;
        $this->unsubscribed = $values['unsubscribed'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
