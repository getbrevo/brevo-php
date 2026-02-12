<?php

namespace Brevo\Contacts\Requests;

use Brevo\Core\Json\JsonSerializableType;

class GetContactStatsRequest extends JsonSerializableType
{
    /**
     * @var ?string $startDate **Mandatory if endDate is used.** Starting date (YYYY-MM-DD) of the statistic events specific to campaigns. Must be lower than equal to endDate
     */
    public ?string $startDate;

    /**
     * @var ?string $endDate **Mandatory if startDate is used.** Ending date (YYYY-MM-DD) of the statistic events specific to campaigns. Must be greater than equal to startDate. Maximum difference between startDate and endDate should not be greater than 90 days
     */
    public ?string $endDate;

    /**
     * @param array{
     *   startDate?: ?string,
     *   endDate?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->startDate = $values['startDate'] ?? null;
        $this->endDate = $values['endDate'] ?? null;
    }
}
