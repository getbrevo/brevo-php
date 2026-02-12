<?php

namespace Brevo\Contacts\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;
use Brevo\Core\Types\ArrayType;

/**
 * Campaign Statistics for the contact
 */
class GetContactStatsResponse extends JsonSerializableType
{
    /**
     * @var ?array<GetContactStatsResponseClickedItem> $clicked
     */
    #[JsonProperty('clicked'), ArrayType([GetContactStatsResponseClickedItem::class])]
    public ?array $clicked;

    /**
     * @var ?array<GetContactStatsResponseComplaintsItem> $complaints
     */
    #[JsonProperty('complaints'), ArrayType([GetContactStatsResponseComplaintsItem::class])]
    public ?array $complaints;

    /**
     * @var ?array<GetContactStatsResponseDeliveredItem> $delivered
     */
    #[JsonProperty('delivered'), ArrayType([GetContactStatsResponseDeliveredItem::class])]
    public ?array $delivered;

    /**
     * @var ?array<GetContactStatsResponseHardBouncesItem> $hardBounces
     */
    #[JsonProperty('hardBounces'), ArrayType([GetContactStatsResponseHardBouncesItem::class])]
    public ?array $hardBounces;

    /**
     * @var ?array<GetContactStatsResponseMessagesSentItem> $messagesSent
     */
    #[JsonProperty('messagesSent'), ArrayType([GetContactStatsResponseMessagesSentItem::class])]
    public ?array $messagesSent;

    /**
     * @var ?array<GetContactStatsResponseOpenedItem> $opened
     */
    #[JsonProperty('opened'), ArrayType([GetContactStatsResponseOpenedItem::class])]
    public ?array $opened;

    /**
     * @var ?array<GetContactStatsResponseSoftBouncesItem> $softBounces
     */
    #[JsonProperty('softBounces'), ArrayType([GetContactStatsResponseSoftBouncesItem::class])]
    public ?array $softBounces;

    /**
     * @var ?array<GetContactStatsResponseTransacAttributesItem> $transacAttributes
     */
    #[JsonProperty('transacAttributes'), ArrayType([GetContactStatsResponseTransacAttributesItem::class])]
    public ?array $transacAttributes;

    /**
     * @var ?GetContactStatsResponseUnsubscriptions $unsubscriptions
     */
    #[JsonProperty('unsubscriptions')]
    public ?GetContactStatsResponseUnsubscriptions $unsubscriptions;

    /**
     * @param array{
     *   clicked?: ?array<GetContactStatsResponseClickedItem>,
     *   complaints?: ?array<GetContactStatsResponseComplaintsItem>,
     *   delivered?: ?array<GetContactStatsResponseDeliveredItem>,
     *   hardBounces?: ?array<GetContactStatsResponseHardBouncesItem>,
     *   messagesSent?: ?array<GetContactStatsResponseMessagesSentItem>,
     *   opened?: ?array<GetContactStatsResponseOpenedItem>,
     *   softBounces?: ?array<GetContactStatsResponseSoftBouncesItem>,
     *   transacAttributes?: ?array<GetContactStatsResponseTransacAttributesItem>,
     *   unsubscriptions?: ?GetContactStatsResponseUnsubscriptions,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->clicked = $values['clicked'] ?? null;
        $this->complaints = $values['complaints'] ?? null;
        $this->delivered = $values['delivered'] ?? null;
        $this->hardBounces = $values['hardBounces'] ?? null;
        $this->messagesSent = $values['messagesSent'] ?? null;
        $this->opened = $values['opened'] ?? null;
        $this->softBounces = $values['softBounces'] ?? null;
        $this->transacAttributes = $values['transacAttributes'] ?? null;
        $this->unsubscriptions = $values['unsubscriptions'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
