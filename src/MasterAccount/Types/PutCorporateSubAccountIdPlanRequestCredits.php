<?php

namespace Brevo\MasterAccount\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;

/**
 * Credit details to update
 */
class PutCorporateSubAccountIdPlanRequestCredits extends JsonSerializableType
{
    /**
     * Number of email credits | Pass the value -1 for unlimited
     * emails in ENTv2 only
     *
     * @var ?int $email
     */
    #[JsonProperty('email')]
    public ?int $email;

    /**
     * Number of externalFeeds credits, possible values are 0 or 1
     * |available in ENTv2 only
     *
     * @var ?int $externalFeeds
     */
    #[JsonProperty('externalFeeds')]
    public ?int $externalFeeds;

    /**
     * Number of SMS credits | Pass the value -1 for unlimited SMS
     * in ENTv2 only
     *
     * @var ?float $sms
     */
    #[JsonProperty('sms')]
    public ?float $sms;

    /**
     * Number of whatsapp credits | Pass the value -1 for unlimited
     * whatsapp in ENTv2 only
     *
     * @var ?float $whatsapp
     */
    #[JsonProperty('whatsapp')]
    public ?float $whatsapp;

    /**
     * Number of Push credits, possible value is 0 and -1 |
     * available in ENT-v2 only
     *
     * @var ?int $wpSubscribers
     */
    #[JsonProperty('wpSubscribers')]
    public ?int $wpSubscribers;

    /**
     * @param array{
     *   email?: ?int,
     *   externalFeeds?: ?int,
     *   sms?: ?float,
     *   whatsapp?: ?float,
     *   wpSubscribers?: ?int,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->email = $values['email'] ?? null;
        $this->externalFeeds = $values['externalFeeds'] ?? null;
        $this->sms = $values['sms'] ?? null;
        $this->whatsapp = $values['whatsapp'] ?? null;
        $this->wpSubscribers = $values['wpSubscribers'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
