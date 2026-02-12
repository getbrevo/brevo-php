<?php

namespace Brevo\Contacts\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;

class GetContactStatsResponseClickedItemLinksItem extends JsonSerializableType
{
    /**
     * @var int $count Number of clicks on this link for the campaign
     */
    #[JsonProperty('count')]
    public int $count;

    /**
     * @var string $eventTime UTC date-time of the event
     */
    #[JsonProperty('eventTime')]
    public string $eventTime;

    /**
     * @var string $ip IP from which the user has clicked on the link
     */
    #[JsonProperty('ip')]
    public string $ip;

    /**
     * @var string $url URL of the clicked link
     */
    #[JsonProperty('url')]
    public string $url;

    /**
     * @param array{
     *   count: int,
     *   eventTime: string,
     *   ip: string,
     *   url: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->count = $values['count'];
        $this->eventTime = $values['eventTime'];
        $this->ip = $values['ip'];
        $this->url = $values['url'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
