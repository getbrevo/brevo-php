<?php

namespace Brevo\TransactionalEmails\Requests;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;

class DeleteHardbouncesRequest extends JsonSerializableType
{
    /**
     * @var ?string $contactEmail Target a specific email address
     */
    #[JsonProperty('contactEmail')]
    public ?string $contactEmail;

    /**
     * @var ?string $endDate Ending date (YYYY-MM-DD) of the time period for deletion. The hardbounces until this date will be deleted. Must be greater than or equal to the startDate
     */
    #[JsonProperty('endDate')]
    public ?string $endDate;

    /**
     * @var ?string $startDate Starting date (YYYY-MM-DD) of the time period for deletion. The hardbounces occurred after this date will be deleted. Must be less than or equal to the endDate
     */
    #[JsonProperty('startDate')]
    public ?string $startDate;

    /**
     * @param array{
     *   contactEmail?: ?string,
     *   endDate?: ?string,
     *   startDate?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->contactEmail = $values['contactEmail'] ?? null;
        $this->endDate = $values['endDate'] ?? null;
        $this->startDate = $values['startDate'] ?? null;
    }
}
