<?php

namespace Brevo\Ecommerce\Requests;

use Brevo\Core\Json\JsonSerializableType;
use DateTime;

class GetEcommerceAttributionMetricsRequest extends JsonSerializableType
{
    /**
     * @var ?DateTime $periodFrom When getting metrics for a specific period, define the starting datetime in RFC3339 format
     */
    public ?DateTime $periodFrom;

    /**
     * @var ?DateTime $periodTo When getting metrics for a specific period, define the end datetime in RFC3339 format
     */
    public ?DateTime $periodTo;

    /**
     * @var ?array<string> $emailCampaignIdArray The email campaign ID(s) to get metrics for
     */
    public ?array $emailCampaignIdArray;

    /**
     * @var ?array<string> $smsCampaignIdArray The SMS campaign ID(s) to get metrics for
     */
    public ?array $smsCampaignIdArray;

    /**
     * @var ?array<string> $automationWorkflowEmailIdArray The automation workflow ID(s) to get email attribution metrics for
     */
    public ?array $automationWorkflowEmailIdArray;

    /**
     * @var ?array<string> $automationWorkflowSmsIdArray The automation workflow ID(s) to get SMS attribution metrics for
     */
    public ?array $automationWorkflowSmsIdArray;

    /**
     * @param array{
     *   periodFrom?: ?DateTime,
     *   periodTo?: ?DateTime,
     *   emailCampaignIdArray?: ?array<string>,
     *   smsCampaignIdArray?: ?array<string>,
     *   automationWorkflowEmailIdArray?: ?array<string>,
     *   automationWorkflowSmsIdArray?: ?array<string>,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->periodFrom = $values['periodFrom'] ?? null;
        $this->periodTo = $values['periodTo'] ?? null;
        $this->emailCampaignIdArray = $values['emailCampaignIdArray'] ?? null;
        $this->smsCampaignIdArray = $values['smsCampaignIdArray'] ?? null;
        $this->automationWorkflowEmailIdArray = $values['automationWorkflowEmailIdArray'] ?? null;
        $this->automationWorkflowSmsIdArray = $values['automationWorkflowSmsIdArray'] ?? null;
    }
}
