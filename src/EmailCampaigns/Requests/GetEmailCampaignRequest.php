<?php

namespace Brevo\EmailCampaigns\Requests;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\EmailCampaigns\Types\GetEmailCampaignRequestStatistics;

class GetEmailCampaignRequest extends JsonSerializableType
{
    /**
     * @var ?value-of<GetEmailCampaignRequestStatistics> $statistics Filter on type of the statistics required. Example **globalStats** value will only fetch globalStats info of the campaign in returned response.
     */
    public ?string $statistics;

    /**
     * @var ?bool $excludeHtmlContent Use this flag to exclude htmlContent from the response body. If set to **true**, htmlContent field will be returned as empty string in the response body
     */
    public ?bool $excludeHtmlContent;

    /**
     * @param array{
     *   statistics?: ?value-of<GetEmailCampaignRequestStatistics>,
     *   excludeHtmlContent?: ?bool,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->statistics = $values['statistics'] ?? null;
        $this->excludeHtmlContent = $values['excludeHtmlContent'] ?? null;
    }
}
