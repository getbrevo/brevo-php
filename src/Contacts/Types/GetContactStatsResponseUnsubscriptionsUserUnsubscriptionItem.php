<?php

namespace Brevo\Contacts\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;

class GetContactStatsResponseUnsubscriptionsUserUnsubscriptionItem extends JsonSerializableType
{
    /**
     * @var int $campaignId ID of the campaign which generated the event
     */
    #[JsonProperty('campaignId')]
    public int $campaignId;

    /**
     * @var string $eventTime UTC date-time of the event
     */
    #[JsonProperty('eventTime')]
    public string $eventTime;

    /**
     * @var ?string $ip IP from which the user has unsubscribed
     */
    #[JsonProperty('ip')]
    public ?string $ip;

    /**
     * @param array{
     *   campaignId: int,
     *   eventTime: string,
     *   ip?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->campaignId = $values['campaignId'];
        $this->eventTime = $values['eventTime'];
        $this->ip = $values['ip'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
