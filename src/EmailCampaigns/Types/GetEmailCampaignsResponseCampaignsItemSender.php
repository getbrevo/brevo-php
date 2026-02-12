<?php

namespace Brevo\EmailCampaigns\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;

class GetEmailCampaignsResponseCampaignsItemSender extends JsonSerializableType
{
    /**
     * @var ?string $email Sender email of the campaign
     */
    #[JsonProperty('email')]
    public ?string $email;

    /**
     * @var ?int $id Sender id of the campaign
     */
    #[JsonProperty('id')]
    public ?int $id;

    /**
     * @var ?string $name Sender name of the campaign
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
