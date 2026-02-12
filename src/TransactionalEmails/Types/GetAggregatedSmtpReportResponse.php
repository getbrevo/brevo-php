<?php

namespace Brevo\TransactionalEmails\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;

class GetAggregatedSmtpReportResponse extends JsonSerializableType
{
    /**
     * @var ?int $blocked Number of blocked contact emails for the timeframe
     */
    #[JsonProperty('blocked')]
    public ?int $blocked;

    /**
     * @var ?int $clicks Number of clicks for the timeframe
     */
    #[JsonProperty('clicks')]
    public ?int $clicks;

    /**
     * @var ?int $delivered Number of delivered emails for the timeframe
     */
    #[JsonProperty('delivered')]
    public ?int $delivered;

    /**
     * @var ?int $hardBounces Number of hardbounces for the timeframe
     */
    #[JsonProperty('hardBounces')]
    public ?int $hardBounces;

    /**
     * @var ?int $invalid Number of invalid emails for the timeframe
     */
    #[JsonProperty('invalid')]
    public ?int $invalid;

    /**
     * @var ?int $opens Number of openings for the timeframe
     */
    #[JsonProperty('opens')]
    public ?int $opens;

    /**
     * @var ?string $range Time frame of the report
     */
    #[JsonProperty('range')]
    public ?string $range;

    /**
     * @var ?int $requests Number of requests for the timeframe
     */
    #[JsonProperty('requests')]
    public ?int $requests;

    /**
     * @var ?int $softBounces Number of softbounces for the timeframe
     */
    #[JsonProperty('softBounces')]
    public ?int $softBounces;

    /**
     * @var ?int $spamReports Number of complaint (spam report) for the timeframe
     */
    #[JsonProperty('spamReports')]
    public ?int $spamReports;

    /**
     * @var ?int $uniqueClicks Number of unique clicks for the timeframe
     */
    #[JsonProperty('uniqueClicks')]
    public ?int $uniqueClicks;

    /**
     * @var ?int $uniqueOpens Number of unique openings for the timeframe
     */
    #[JsonProperty('uniqueOpens')]
    public ?int $uniqueOpens;

    /**
     * @var ?int $unsubscribed Number of unsubscribed emails for the timeframe
     */
    #[JsonProperty('unsubscribed')]
    public ?int $unsubscribed;

    /**
     * @param array{
     *   blocked?: ?int,
     *   clicks?: ?int,
     *   delivered?: ?int,
     *   hardBounces?: ?int,
     *   invalid?: ?int,
     *   opens?: ?int,
     *   range?: ?string,
     *   requests?: ?int,
     *   softBounces?: ?int,
     *   spamReports?: ?int,
     *   uniqueClicks?: ?int,
     *   uniqueOpens?: ?int,
     *   unsubscribed?: ?int,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->blocked = $values['blocked'] ?? null;
        $this->clicks = $values['clicks'] ?? null;
        $this->delivered = $values['delivered'] ?? null;
        $this->hardBounces = $values['hardBounces'] ?? null;
        $this->invalid = $values['invalid'] ?? null;
        $this->opens = $values['opens'] ?? null;
        $this->range = $values['range'] ?? null;
        $this->requests = $values['requests'] ?? null;
        $this->softBounces = $values['softBounces'] ?? null;
        $this->spamReports = $values['spamReports'] ?? null;
        $this->uniqueClicks = $values['uniqueClicks'] ?? null;
        $this->uniqueOpens = $values['uniqueOpens'] ?? null;
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
