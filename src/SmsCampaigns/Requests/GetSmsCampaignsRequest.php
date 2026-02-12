<?php

namespace Brevo\SmsCampaigns\Requests;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\SmsCampaigns\Types\GetSmsCampaignsRequestStatus;
use Brevo\SmsCampaigns\Types\GetSmsCampaignsRequestSort;

class GetSmsCampaignsRequest extends JsonSerializableType
{
    /**
     * @var ?value-of<GetSmsCampaignsRequestStatus> $status Status of campaign.
     */
    public ?string $status;

    /**
     * @var ?string $startDate **Mandatory if endDate is used.** Starting (urlencoded) UTC date-time (YYYY-MM-DDTHH:mm:ss.SSSZ) to filter the sent sms campaigns. **Prefer to pass your timezone in date-time format for accurate result** ( only available if either 'status' not passed and if passed is set to 'sent' )
     */
    public ?string $startDate;

    /**
     * @var ?string $endDate **Mandatory if startDate is used.** Ending (urlencoded) UTC date-time (YYYY-MM-DDTHH:mm:ss.SSSZ) to filter the sent sms campaigns. **Prefer to pass your timezone in date-time format for accurate result** ( only available if either 'status' not passed and if passed is set to 'sent' )
     */
    public ?string $endDate;

    /**
     * @var ?int $limit Number limitation for the result returned
     */
    public ?int $limit = 500;

    /**
     * @var ?int $offset Beginning point in the list to retrieve from.
     */
    public ?int $offset = 0;

    /**
     * @var ?value-of<GetSmsCampaignsRequestSort> $sort Sort the results in the ascending/descending order of record creation. Default order is **descending** if `sort` is not passed
     */
    public ?string $sort;

    /**
     * @param array{
     *   status?: ?value-of<GetSmsCampaignsRequestStatus>,
     *   startDate?: ?string,
     *   endDate?: ?string,
     *   limit?: ?int,
     *   offset?: ?int,
     *   sort?: ?value-of<GetSmsCampaignsRequestSort>,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->status = $values['status'] ?? null;
        $this->startDate = $values['startDate'] ?? null;
        $this->endDate = $values['endDate'] ?? null;
        $this->limit = $values['limit'] ?? null;
        $this->offset = $values['offset'] ?? null;
        $this->sort = $values['sort'] ?? null;
    }
}
