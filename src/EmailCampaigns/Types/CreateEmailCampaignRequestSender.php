<?php

namespace Brevo\EmailCampaigns\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;

/**
 * Sender details including id or email and name (optional). Only one of either Sender’s email or Sender’s ID shall be passed in one request at a time. Passing both `email` and `id` will result in an error. For example: **{"name":"xyz", "email":"example@abc.com"}** or **{"name":"xyz", "id":123}**
 */
class CreateEmailCampaignRequestSender extends JsonSerializableType
{
    /**
     * @var ?string $email Sender email. Must be a valid email address. Cannot be used together with `id` in the same request.
     */
    #[JsonProperty('email')]
    public ?string $email;

    /**
     * @var ?int $id Select the sender for the campaign on the basis of sender id. Cannot be used together with `email` in the same request. _In order to select a sender with a specific pool of IPs, dedicated IP users shall pass id (instead of email)._
     */
    #[JsonProperty('id')]
    public ?int $id;

    /**
     * @var ?string $name Sender Name
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
