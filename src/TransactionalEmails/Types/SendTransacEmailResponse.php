<?php

namespace Brevo\TransactionalEmails\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;
use Brevo\Core\Types\ArrayType;

class SendTransacEmailResponse extends JsonSerializableType
{
    /**
     * @var ?string $messageId Message ID of the transactional email sent
     */
    #[JsonProperty('messageId')]
    public ?string $messageId;

    /**
     * @var ?array<string> $messageIds
     */
    #[JsonProperty('messageIds'), ArrayType(['string'])]
    public ?array $messageIds;

    /**
     * @param array{
     *   messageId?: ?string,
     *   messageIds?: ?array<string>,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->messageId = $values['messageId'] ?? null;
        $this->messageIds = $values['messageIds'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
