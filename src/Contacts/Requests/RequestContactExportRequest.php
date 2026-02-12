<?php

namespace Brevo\Contacts\Requests;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Contacts\Types\RequestContactExportRequestCustomContactFilter;
use Brevo\Core\Json\JsonProperty;
use Brevo\Core\Types\ArrayType;

class RequestContactExportRequest extends JsonSerializableType
{
    /**
     * @var RequestContactExportRequestCustomContactFilter $customContactFilter Set the filter for the contacts to be exported.
     */
    #[JsonProperty('customContactFilter')]
    public RequestContactExportRequestCustomContactFilter $customContactFilter;

    /**
     * @var ?bool $disableNotification To avoid generating the email notification upon contact export, pass **true**
     */
    #[JsonProperty('disableNotification')]
    public ?bool $disableNotification;

    /**
     * @var ?array<string> $exportAttributes List of all the attributes that you want to export. **These attributes must be present in your contact database. It is required if exportMandatoryAttributes is set false. ** For example: **['fname', 'lname', 'email']**
     */
    #[JsonProperty('exportAttributes'), ArrayType(['string'])]
    public ?array $exportAttributes;

    /**
     * @var ?bool $exportMandatoryAttributes To export mandatory attributes like EMAIL, ADDED_TIME, MODIFIED_TIME
     */
    #[JsonProperty('exportMandatoryAttributes')]
    public ?bool $exportMandatoryAttributes;

    /**
     * @var ?array<string> $exportMetadata Export metadata of contacts such as _listIds, ADDED_TIME, MODIFIED_TIME.
     */
    #[JsonProperty('exportMetadata'), ArrayType(['string'])]
    public ?array $exportMetadata;

    /**
     * @var ?bool $exportDateInUtc Specifies whether the date fields createdAt, modifiedAt in the exported data should be returned in UTC format.
     */
    #[JsonProperty('exportDateInUTC')]
    public ?bool $exportDateInUtc;

    /**
     * @var ?array<string> $exportSubscriptionStatus Export subscription status of contacts for email & sms marketting. Pass email_marketing to obtain the marketing email subscription status & sms_marketing to retrieve the marketing SMS status of the contact.
     */
    #[JsonProperty('exportSubscriptionStatus'), ArrayType(['string'])]
    public ?array $exportSubscriptionStatus;

    /**
     * @var ?string $notifyUrl Webhook that will be called once the export process is finished. For reference, https://help.brevo.com/hc/en-us/articles/360007666479
     */
    #[JsonProperty('notifyUrl')]
    public ?string $notifyUrl;

    /**
     * @param array{
     *   customContactFilter: RequestContactExportRequestCustomContactFilter,
     *   disableNotification?: ?bool,
     *   exportAttributes?: ?array<string>,
     *   exportMandatoryAttributes?: ?bool,
     *   exportMetadata?: ?array<string>,
     *   exportDateInUtc?: ?bool,
     *   exportSubscriptionStatus?: ?array<string>,
     *   notifyUrl?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->customContactFilter = $values['customContactFilter'];
        $this->disableNotification = $values['disableNotification'] ?? null;
        $this->exportAttributes = $values['exportAttributes'] ?? null;
        $this->exportMandatoryAttributes = $values['exportMandatoryAttributes'] ?? null;
        $this->exportMetadata = $values['exportMetadata'] ?? null;
        $this->exportDateInUtc = $values['exportDateInUtc'] ?? null;
        $this->exportSubscriptionStatus = $values['exportSubscriptionStatus'] ?? null;
        $this->notifyUrl = $values['notifyUrl'] ?? null;
    }
}
