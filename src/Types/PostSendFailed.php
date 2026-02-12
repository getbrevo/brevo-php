<?php

namespace Brevo\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;
use Brevo\Core\Types\ArrayType;

class PostSendFailed extends JsonSerializableType
{
    /**
     * @var ?array<string> $blackListedEmails
     */
    #[JsonProperty('blackListedEmails'), ArrayType(['string'])]
    public ?array $blackListedEmails;

    /**
     * @var string $code Response code
     */
    #[JsonProperty('code')]
    public string $code;

    /**
     * @var string $message Response message
     */
    #[JsonProperty('message')]
    public string $message;

    /**
     * @var ?array<string> $unexistingEmails
     */
    #[JsonProperty('unexistingEmails'), ArrayType(['string'])]
    public ?array $unexistingEmails;

    /**
     * @var ?array<string> $withoutListEmails
     */
    #[JsonProperty('withoutListEmails'), ArrayType(['string'])]
    public ?array $withoutListEmails;

    /**
     * @param array{
     *   code: string,
     *   message: string,
     *   blackListedEmails?: ?array<string>,
     *   unexistingEmails?: ?array<string>,
     *   withoutListEmails?: ?array<string>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->blackListedEmails = $values['blackListedEmails'] ?? null;
        $this->code = $values['code'];
        $this->message = $values['message'];
        $this->unexistingEmails = $values['unexistingEmails'] ?? null;
        $this->withoutListEmails = $values['withoutListEmails'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
