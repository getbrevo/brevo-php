<?php

namespace Brevo\SmsCampaigns\Requests;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;
use Brevo\SmsCampaigns\Types\RequestSmsRecipientExportRequestRecipientsType;

class RequestSmsRecipientExportRequest extends JsonSerializableType
{
    /**
     * @var ?string $notifyUrl URL that will be called once the export process is finished. For reference, https://help.brevo.com/hc/en-us/articles/360007666479
     */
    #[JsonProperty('notifyURL')]
    public ?string $notifyUrl;

    /**
     * @var value-of<RequestSmsRecipientExportRequestRecipientsType> $recipientsType Filter the recipients based on how they interacted with the campaign
     */
    #[JsonProperty('recipientsType')]
    public string $recipientsType;

    /**
     * @param array{
     *   recipientsType: value-of<RequestSmsRecipientExportRequestRecipientsType>,
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
