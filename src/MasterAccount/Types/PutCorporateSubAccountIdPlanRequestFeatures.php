<?php

namespace Brevo\MasterAccount\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;

/**
 * Features details to update
 */
class PutCorporateSubAccountIdPlanRequestFeatures extends JsonSerializableType
{
    /**
     * @var ?int $inbox Number of inboxes / Not required on ENTv2
     */
    #[JsonProperty('inbox')]
    public ?int $inbox;

    /**
     * @var ?int $landingPage Number of landing pages
     */
    #[JsonProperty('landingPage')]
    public ?int $landingPage;

    /**
     * @var ?int $salesUsers Number of sales and service users | only available in ENT-V2
     */
    #[JsonProperty('salesUsers')]
    public ?int $salesUsers;

    /**
     * @var ?int $users Number of multi-users
     */
    #[JsonProperty('users')]
    public ?int $users;

    /**
     * @param array{
     *   inbox?: ?int,
     *   landingPage?: ?int,
     *   salesUsers?: ?int,
     *   users?: ?int,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->inbox = $values['inbox'] ?? null;
        $this->landingPage = $values['landingPage'] ?? null;
        $this->salesUsers = $values['salesUsers'] ?? null;
        $this->users = $values['users'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
