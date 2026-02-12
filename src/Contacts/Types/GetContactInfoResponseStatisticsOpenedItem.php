<?php

namespace Brevo\Contacts\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;

class GetContactInfoResponseStatisticsOpenedItem extends JsonSerializableType
{
    /**
     * @var int $campaignId ID of the campaign which generated the event
     */
    #[JsonProperty('campaignId')]
    public int $campaignId;

    /**
     * @var int $count Number of openings for the campaign
     */
    #[JsonProperty('count')]
    public int $count;

    /**
     * @var string $eventTime UTC date-time of the event
     */
    #[JsonProperty('eventTime')]
    public string $eventTime;

    /**
     * @var string $ip IP from which the user has opened the email
     */
    #[JsonProperty('ip')]
    public string $ip;

    /**
     * @param array{
     *   campaignId: int,
     *   count: int,
     *   eventTime: string,
     *   ip: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->campaignId = $values['campaignId'];
        $this->count = $values['count'];
        $this->eventTime = $values['eventTime'];
        $this->ip = $values['ip'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
