<?php

namespace Brevo\TransactionalEmails\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;

/**
 * Reason for blocking / unsubscribing
 */
class GetTransacBlockedContactsResponseContactsItemReason extends JsonSerializableType
{
    /**
     * @var ?value-of<GetTransacBlockedContactsResponseContactsItemReasonCode> $code Reason code for blocking / unsubscribing (This code is safe for comparison)
     */
    #[JsonProperty('code')]
    public ?string $code;

    /**
     * @var ?string $message Reason for blocking / unsubscribing (This string is not safe for comparison)
     */
    #[JsonProperty('message')]
    public ?string $message;

    /**
     * @param array{
     *   code?: ?value-of<GetTransacBlockedContactsResponseContactsItemReasonCode>,
     *   message?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->code = $values['code'] ?? null;
        $this->message = $values['message'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
