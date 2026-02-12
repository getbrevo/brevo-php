<?php

namespace Brevo\Senders\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;

class CreateSenderResponse extends JsonSerializableType
{
    /**
     * Status of DKIM configuration for the sender (true = DKIM not
     * well configured, false = DKIM well configured)
     *
     * @var ?bool $dkimError
     */
    #[JsonProperty('dkimError')]
    public ?bool $dkimError;

    /**
     * @var int $id ID of the Sender created
     */
    #[JsonProperty('id')]
    public int $id;

    /**
     * Status of SPF configuration for the sender (true = SPF not
     * well configured, false = SPF well configured)
     *
     * @var ?bool $spfError
     */
    #[JsonProperty('spfError')]
    public ?bool $spfError;

    /**
     * @param array{
     *   id: int,
     *   dkimError?: ?bool,
     *   spfError?: ?bool,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->dkimError = $values['dkimError'] ?? null;
        $this->id = $values['id'];
        $this->spfError = $values['spfError'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
