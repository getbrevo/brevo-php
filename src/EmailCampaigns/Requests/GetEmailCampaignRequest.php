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
     * @param array{
     *   statistics?: ?value-of<GetEmailCampaignRequestStatistics>,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->statistics = $values['statistics'] ?? null;
    }
}
