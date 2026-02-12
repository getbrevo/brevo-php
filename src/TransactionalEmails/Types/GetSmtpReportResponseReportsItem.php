<?php

namespace Brevo\TransactionalEmails\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;
use DateTime;
use Brevo\Core\Types\Date;

class GetSmtpReportResponseReportsItem extends JsonSerializableType
{
    /**
     * @var int $blocked Number of blocked emails for the date
     */
    #[JsonProperty('blocked')]
    public int $blocked;

    /**
     * @var int $clicks Number of clicks for the date
     */
    #[JsonProperty('clicks')]
    public int $clicks;

    /**
     * @var DateTime $date Date of the statistics
     */
    #[JsonProperty('date'), Date(Date::TYPE_DATE)]
    public DateTime $date;

    /**
     * @var int $delivered Number of delivered emails for the date
     */
    #[JsonProperty('delivered')]
    public int $delivered;

    /**
     * @var int $hardBounces Number of hardbounces for the date
     */
    #[JsonProperty('hardBounces')]
    public int $hardBounces;

    /**
     * @var int $invalid Number of invalid emails for the date
     */
    #[JsonProperty('invalid')]
    public int $invalid;

    /**
     * @var int $opens Number of openings for the date
     */
    #[JsonProperty('opens')]
    public int $opens;

    /**
     * @var int $requests Number of requests for the date
     */
    #[JsonProperty('requests')]
    public int $requests;

    /**
     * @var int $softBounces Number of softbounces for the date
     */
    #[JsonProperty('softBounces')]
    public int $softBounces;

    /**
     * @var int $spamReports Number of complaints (spam reports) for the date
     */
    #[JsonProperty('spamReports')]
    public int $spamReports;

    /**
     * @var int $uniqueClicks Number of unique clicks for the date
     */
    #[JsonProperty('uniqueClicks')]
    public int $uniqueClicks;

    /**
     * @var int $uniqueOpens Number of unique openings for the date
     */
    #[JsonProperty('uniqueOpens')]
    public int $uniqueOpens;

    /**
     * @var int $unsubscribed Number of unsubscribed emails for the date
     */
    #[JsonProperty('unsubscribed')]
    public int $unsubscribed;

    /**
     * @param array{
     *   blocked: int,
     *   clicks: int,
     *   date: DateTime,
     *   delivered: int,
     *   hardBounces: int,
     *   invalid: int,
     *   opens: int,
     *   requests: int,
     *   softBounces: int,
     *   spamReports: int,
     *   uniqueClicks: int,
     *   uniqueOpens: int,
     *   unsubscribed: int,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->blocked = $values['blocked'];
        $this->clicks = $values['clicks'];
        $this->date = $values['date'];
        $this->delivered = $values['delivered'];
        $this->hardBounces = $values['hardBounces'];
        $this->invalid = $values['invalid'];
        $this->opens = $values['opens'];
        $this->requests = $values['requests'];
        $this->softBounces = $values['softBounces'];
        $this->spamReports = $values['spamReports'];
        $this->uniqueClicks = $values['uniqueClicks'];
        $this->uniqueOpens = $values['uniqueOpens'];
        $this->unsubscribed = $values['unsubscribed'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
