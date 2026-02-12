<?php

namespace Brevo\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;

class GetSmsCampaignStats extends JsonSerializableType
{
    /**
     * @var int $answered Number of replies to the SMS
     */
    #[JsonProperty('answered')]
    public int $answered;

    /**
     * @var int $delivered Number of delivered SMS
     */
    #[JsonProperty('delivered')]
    public int $delivered;

    /**
     * @var int $hardBounces Number of hardbounced SMS
     */
    #[JsonProperty('hardBounces')]
    public int $hardBounces;

    /**
     * @var int $processing Number of processing SMS
     */
    #[JsonProperty('processing')]
    public int $processing;

    /**
     * @var int $sent Number of sent SMS
     */
    #[JsonProperty('sent')]
    public int $sent;

    /**
     * @var int $softBounces Number of softbounced SMS
     */
    #[JsonProperty('softBounces')]
    public int $softBounces;

    /**
     * @var int $unsubscriptions Number of unsubscription SMS
     */
    #[JsonProperty('unsubscriptions')]
    public int $unsubscriptions;

    /**
     * @param array{
     *   answered: int,
     *   delivered: int,
     *   hardBounces: int,
     *   processing: int,
     *   sent: int,
     *   softBounces: int,
     *   unsubscriptions: int,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->answered = $values['answered'];
        $this->delivered = $values['delivered'];
        $this->hardBounces = $values['hardBounces'];
        $this->processing = $values['processing'];
        $this->sent = $values['sent'];
        $this->softBounces = $values['softBounces'];
        $this->unsubscriptions = $values['unsubscriptions'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
