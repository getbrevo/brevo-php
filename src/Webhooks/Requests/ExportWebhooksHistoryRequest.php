<?php

namespace Brevo\Webhooks\Requests;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;
use Brevo\Webhooks\Types\ExportWebhooksHistoryRequestEvent;
use Brevo\Webhooks\Types\ExportWebhooksHistoryRequestType;

class ExportWebhooksHistoryRequest extends JsonSerializableType
{
    /**
     * Number of days in the past including today (positive
     * integer). _Not compatible with 'startDate' and 'endDate'_
     *
     * @var ?int $days
     */
    #[JsonProperty('days')]
    public ?int $days;

    /**
     * @var ?string $email Filter the history for a specific email
     */
    #[JsonProperty('email')]
    public ?string $email;

    /**
     * Mandatory if startDate is used. Ending date of the report
     * (YYYY-MM-DD). Must be greater than equal to startDate
     *
     * @var ?string $endDate
     */
    #[JsonProperty('endDate')]
    public ?string $endDate;

    /**
     * @var value-of<ExportWebhooksHistoryRequestEvent> $event Filter the history for a specific event type
     */
    #[JsonProperty('event')]
    public string $event;

    /**
     * Filter the history for a specific message id. Applicable
     * only for transactional webhooks.
     *
     * @var ?int $messageId
     */
    #[JsonProperty('messageId')]
    public ?int $messageId;

    /**
     * @var string $notifyUrl Webhook URL to receive CSV file link
     */
    #[JsonProperty('notifyURL')]
    public string $notifyUrl;

    /**
     * @var ?string $sort Sorting order of records (asc or desc)
     */
    #[JsonProperty('sort')]
    public ?string $sort;

    /**
     * Mandatory if endDate is used. Starting date of the history
     * (YYYY-MM-DD). Must be lower than equal to endDate
     *
     * @var ?string $startDate
     */
    #[JsonProperty('startDate')]
    public ?string $startDate;

    /**
     * @var value-of<ExportWebhooksHistoryRequestType> $type Filter the history based on webhook type
     */
    #[JsonProperty('type')]
    public string $type;

    /**
     * @var ?int $webhookId Filter the history for a specific webhook id
     */
    #[JsonProperty('webhookId')]
    public ?int $webhookId;

    /**
     * @param array{
     *   event: value-of<ExportWebhooksHistoryRequestEvent>,
     *   notifyUrl: string,
     *   type: value-of<ExportWebhooksHistoryRequestType>,
     *   days?: ?int,
     *   email?: ?string,
     *   endDate?: ?string,
     *   messageId?: ?int,
     *   sort?: ?string,
     *   startDate?: ?string,
     *   webhookId?: ?int,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->days = $values['days'] ?? null;
        $this->email = $values['email'] ?? null;
        $this->endDate = $values['endDate'] ?? null;
        $this->event = $values['event'];
        $this->messageId = $values['messageId'] ?? null;
        $this->notifyUrl = $values['notifyUrl'];
        $this->sort = $values['sort'] ?? null;
        $this->startDate = $values['startDate'] ?? null;
        $this->type = $values['type'];
        $this->webhookId = $values['webhookId'] ?? null;
    }
}
