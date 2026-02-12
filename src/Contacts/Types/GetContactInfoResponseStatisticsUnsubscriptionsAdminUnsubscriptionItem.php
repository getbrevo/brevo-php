<?php

namespace Brevo\Contacts\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;

class GetContactInfoResponseStatisticsUnsubscriptionsAdminUnsubscriptionItem extends JsonSerializableType
{
    /**
     * @var string $eventTime UTC date-time of the event
     */
    #[JsonProperty('eventTime')]
    public string $eventTime;

    /**
     * @var ?string $ip IP from which the user has been unsubscribed
     */
    #[JsonProperty('ip')]
    public ?string $ip;

    /**
     * @param array{
     *   eventTime: string,
     *   ip?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
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
