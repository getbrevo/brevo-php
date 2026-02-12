<?php

namespace Brevo\EmailCampaigns\Requests;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;
use Brevo\EmailCampaigns\Types\EmailExportRecipientsRequestRecipientsType;

class EmailExportRecipientsRequest extends JsonSerializableType
{
    /**
     * @var ?string $notifyUrl Webhook called once the export process is finished. For reference, https://help.brevo.com/hc/en-us/articles/360007666479
     */
    #[JsonProperty('notifyURL')]
    public ?string $notifyUrl;

    /**
     * @var value-of<EmailExportRecipientsRequestRecipientsType> $recipientsType Type of recipients to export for a campaign
     */
    #[JsonProperty('recipientsType')]
    public string $recipientsType;

    /**
     * @param array{
     *   recipientsType: value-of<EmailExportRecipientsRequestRecipientsType>,
     *   notifyUrl?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->notifyUrl = $values['notifyUrl'] ?? null;
        $this->recipientsType = $values['recipientsType'];
    }
}
