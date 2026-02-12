<?php

namespace Brevo\TransactionalSms\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;
use DateTime;
use Brevo\Core\Types\Date;

class GetTransacSmsReportResponseReportsItem extends JsonSerializableType
{
    /**
     * @var ?int $accepted Number of accepted SMS for the date
     */
    #[JsonProperty('accepted')]
    public ?int $accepted;

    /**
     * @var ?int $blocked Number of blocked contact for the date
     */
    #[JsonProperty('blocked')]
    public ?int $blocked;

    /**
     * @var ?DateTime $date Date for which statistics are retrieved
     */
    #[JsonProperty('date'), Date(Date::TYPE_DATE)]
    public ?DateTime $date;

    /**
     * @var ?int $delivered Number of delivered SMS for the date
     */
    #[JsonProperty('delivered')]
    public ?int $delivered;

    /**
     * @var ?int $hardBounces Number of hardbounces for the date
     */
    #[JsonProperty('hardBounces')]
    public ?int $hardBounces;

    /**
     * @var ?int $rejected Number of rejected SMS for the date
     */
    #[JsonProperty('rejected')]
    public ?int $rejected;

    /**
     * @var ?int $replied Number of answered SMS for the date
     */
    #[JsonProperty('replied')]
    public ?int $replied;

    /**
     * @var ?int $requests Number of requests for the date
     */
    #[JsonProperty('requests')]
    public ?int $requests;

    /**
     * @var ?int $skipped Number of skipped SMS for the date
     */
    #[JsonProperty('skipped')]
    public ?int $skipped;

    /**
     * @var ?int $softBounces Number of softbounces for the date
     */
    #[JsonProperty('softBounces')]
    public ?int $softBounces;

    /**
     * @var ?int $unsubscribed Number of unsubscription for the date
     */
    #[JsonProperty('unsubscribed')]
    public ?int $unsubscribed;

    /**
     * @param array{
     *   accepted?: ?int,
     *   blocked?: ?int,
     *   date?: ?DateTime,
     *   delivered?: ?int,
     *   hardBounces?: ?int,
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
        $this->date = $values['date'] ?? null;
        $this->delivered = $values['delivered'] ?? null;
        $this->hardBounces = $values['hardBounces'] ?? null;
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
