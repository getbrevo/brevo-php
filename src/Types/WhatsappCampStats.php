<?php

namespace Brevo\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;

class WhatsappCampStats extends JsonSerializableType
{
    /**
     * @var int $delivered
     */
    #[JsonProperty('delivered')]
    public int $delivered;

    /**
     * @var int $notSent
     */
    #[JsonProperty('notSent')]
    public int $notSent;

    /**
     * @var int $read
     */
    #[JsonProperty('read')]
    public int $read;

    /**
     * @var int $sent
     */
    #[JsonProperty('sent')]
    public int $sent;

    /**
     * @var int $unsubscribe
     */
    #[JsonProperty('unsubscribe')]
    public int $unsubscribe;

    /**
     * @param array{
     *   delivered: int,
     *   notSent: int,
     *   read: int,
     *   sent: int,
     *   unsubscribe: int,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->delivered = $values['delivered'];
        $this->notSent = $values['notSent'];
        $this->read = $values['read'];
        $this->sent = $values['sent'];
        $this->unsubscribe = $values['unsubscribe'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
