<?php

namespace Brevo\Senders\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;
use Brevo\Core\Types\ArrayType;

class GetSendersResponse extends JsonSerializableType
{
    /**
     * @var ?array<GetSendersResponseSendersItem> $senders List of the senders available in your account
     */
    #[JsonProperty('senders'), ArrayType([GetSendersResponseSendersItem::class])]
    public ?array $senders;

    /**
     * @param array{
     *   senders?: ?array<GetSendersResponseSendersItem>,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->senders = $values['senders'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
