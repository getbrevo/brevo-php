<?php

namespace Brevo\TransactionalSms\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;

class SendTransacSmsResponse extends JsonSerializableType
{
    /**
     * @var int $messageId
     */
    #[JsonProperty('messageId')]
    public int $messageId;

    /**
     * @var string $reference
     */
    #[JsonProperty('reference')]
    public string $reference;

    /**
     * @var ?float $remainingCredits Remaining SMS credits of the user
     */
    #[JsonProperty('remainingCredits')]
    public ?float $remainingCredits;

    /**
     * @var ?int $smsCount Count of SMS's to send multiple text messages
     */
    #[JsonProperty('smsCount')]
    public ?int $smsCount;

    /**
     * @var ?float $usedCredits SMS credits used per text message
     */
    #[JsonProperty('usedCredits')]
    public ?float $usedCredits;

    /**
     * @param array{
     *   messageId: int,
     *   reference: string,
     *   remainingCredits?: ?float,
     *   smsCount?: ?int,
     *   usedCredits?: ?float,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->messageId = $values['messageId'];
        $this->reference = $values['reference'];
        $this->remainingCredits = $values['remainingCredits'] ?? null;
        $this->smsCount = $values['smsCount'] ?? null;
        $this->usedCredits = $values['usedCredits'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
