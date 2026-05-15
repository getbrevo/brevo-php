<?php

namespace Brevo\TransactionalEmails\Requests;

use Brevo\Core\Json\JsonSerializableType;

class DeleteSmtpLogIdentifierRequest extends JsonSerializableType
{
    /**
     * @var ?string $fromDate Starting date (YYYY-MM-DD) to narrow down logs for deletion
     */
    public ?string $fromDate;

    /**
     * @var ?string $toDate Ending date (YYYY-MM-DD) to narrow down logs for deletion
     */
    public ?string $toDate;

    /**
     * @param array{
     *   fromDate?: ?string,
     *   toDate?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->fromDate = $values['fromDate'] ?? null;
        $this->toDate = $values['toDate'] ?? null;
    }
}
