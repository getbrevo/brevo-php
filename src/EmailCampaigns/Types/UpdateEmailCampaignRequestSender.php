<?php

namespace Brevo\EmailCampaigns\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;

/**
 * Sender details including id or email and name (optional). Only one of either Sender's email or Sender's ID shall be passed in one request at a time. For example: **{"name":"xyz", "email":"example@abc.com"}** **{"name":"xyz", "id":123}**
 */
class UpdateEmailCampaignRequestSender extends JsonSerializableType
{
    /**
     * @var ?string $email Sender email from which the campaign emails are sent
     */
    #[JsonProperty('email')]
    public ?string $email;

    /**
     * @var ?int $id Select the sender for the campaign on the basis of sender id. **In order to select a sender with specific pool of IP’s, dedicated ip users shall pass id (instead of email)**.
     */
    #[JsonProperty('id')]
    public ?int $id;

    /**
     * @var ?string $name Sender Name from which the campaign emails are sent
     */
    #[JsonProperty('name')]
    public ?string $name;

    /**
     * @param array{
     *   email?: ?string,
     *   id?: ?int,
     *   name?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->email = $values['email'] ?? null;
        $this->id = $values['id'] ?? null;
        $this->name = $values['name'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
