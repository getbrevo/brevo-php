<?php

namespace Brevo\Contacts\Requests;

use Brevo\Core\Json\JsonSerializableType;

class GetListRequest extends JsonSerializableType
{
    /**
     * @var ?string $startDate **Mandatory if endDate is used**. Ending (urlencoded) UTC date-time (YYYY-MM-DDTHH:mm:ss.SSSZ) to aggregate the sent email campaigns for a specific list id. **Prefer to pass your timezone in date-time format for accurate result**
     */
    public ?string $startDate;

    /**
     * @var ?string $endDate **Mandatory if startDate is used**. Ending (urlencoded) UTC date-time (YYYY-MM-DDTHH:mm:ss.SSSZ) to aggregate the sent email campaigns for a specific list id. **Prefer to pass your timezone in date-time format for accurate result**
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
