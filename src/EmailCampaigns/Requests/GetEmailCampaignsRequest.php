<?php

namespace Brevo\EmailCampaigns\Requests;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\EmailCampaigns\Types\GetEmailCampaignsRequestType;
use Brevo\EmailCampaigns\Types\GetEmailCampaignsRequestStatus;
use Brevo\EmailCampaigns\Types\GetEmailCampaignsRequestStatistics;
use Brevo\EmailCampaigns\Types\GetEmailCampaignsRequestSort;

class GetEmailCampaignsRequest extends JsonSerializableType
{
    /**
     * @var ?value-of<GetEmailCampaignsRequestType> $type Filter on the type of the campaigns
     */
    public ?string $type;

    /**
     * @var ?value-of<GetEmailCampaignsRequestStatus> $status Filter on the status of the campaign
     */
    public ?string $status;

    /**
     * @var ?value-of<GetEmailCampaignsRequestStatistics> $statistics Filter on the type of statistics required. Example: **globalStats** value will only fetch globalStats info of the campaign in the returned response. This option only returns data for events that occurred in the last 6 months. For older campaigns, it is advisable to use the **Get Campaign Report** endpoint.
     */
    public ?string $statistics;

    /**
     * @var ?string $startDate **Mandatory if endDate is used.** Starting (urlencoded) UTC date-time (YYYY-MM-DDTHH:mm:ss.SSSZ) to filter the sent email campaigns. **Prefer to pass your timezone in date-time format for accurate result.** Only available if `status` is not passed or is set to `sent`. The date range between `startDate` and `endDate` must not exceed 2 years. `startDate` must not be in the future.
     */
    public ?string $startDate;

    /**
     * @var ?string $endDate **Mandatory if startDate is used.** Ending (urlencoded) UTC date-time (YYYY-MM-DDTHH:mm:ss.SSSZ) to filter the sent email campaigns. **Prefer to pass your timezone in date-time format for accurate result.** Only available if `status` is not passed or is set to `sent`. The date range between `startDate` and `endDate` must not exceed 2 years. `endDate` must not be in the future.
     */
    public ?string $endDate;

    /**
     * @var ?int $limit Number of documents per page
     */
    public ?int $limit = 50;

    /**
     * @var ?int $offset Index of the first document in the page
     */
    public ?int $offset = 0;

    /**
     * @var ?value-of<GetEmailCampaignsRequestSort> $sort Sort the results in the ascending/descending order of record creation. Default order is **descending** if `sort` is not passed
     */
    public ?string $sort;

    /**
     * @var ?bool $excludeHtmlContent Use this flag to exclude htmlContent from the response body. If set to **true**, the htmlContent field will be returned as an empty string in the response body.
     */
    public ?bool $excludeHtmlContent;

    /**
     * @var ?bool $excludePdfAttachment Use this flag to filter out campaigns that have a PDF attachment. If set to **true**, only campaigns without a PDF attachment (or with no attachment at all) will be returned.
     */
    public ?bool $excludePdfAttachment;

    /**
     * @param array{
     *   type?: ?value-of<GetEmailCampaignsRequestType>,
     *   status?: ?value-of<GetEmailCampaignsRequestStatus>,
     *   statistics?: ?value-of<GetEmailCampaignsRequestStatistics>,
     *   startDate?: ?string,
     *   endDate?: ?string,
     *   limit?: ?int,
     *   offset?: ?int,
     *   sort?: ?value-of<GetEmailCampaignsRequestSort>,
     *   excludeHtmlContent?: ?bool,
     *   excludePdfAttachment?: ?bool,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->type = $values['type'] ?? null;
        $this->status = $values['status'] ?? null;
        $this->statistics = $values['statistics'] ?? null;
        $this->startDate = $values['startDate'] ?? null;
        $this->endDate = $values['endDate'] ?? null;
        $this->limit = $values['limit'] ?? null;
        $this->offset = $values['offset'] ?? null;
        $this->sort = $values['sort'] ?? null;
        $this->excludeHtmlContent = $values['excludeHtmlContent'] ?? null;
        $this->excludePdfAttachment = $values['excludePdfAttachment'] ?? null;
    }
}
