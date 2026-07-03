<?php

namespace Brevo\Deals\Requests;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Deals\Types\GetCrmDealsRequestSort;

class GetCrmDealsRequest extends JsonSerializableType
{
    /**
     * @var ?string $filtersAttributesDealName Filter by attributes. If you have a filter for the owner on your end, please send it as filters[attributes.deal_owner] and utilize the account email for the filtering.
     */
    public ?string $filtersAttributesDealName;

    /**
     * @var ?string $filtersAttributesDealOwner Filter by the deal owner. Pass the account email address of the deal owner.
     */
    public ?string $filtersAttributesDealOwner;

    /**
     * @var ?string $filtersAttributesDealStage Filter by the deal stage. Pass the stage id, retrievable from GET /crm/pipeline/details/{pipelineID}.
     */
    public ?string $filtersAttributesDealStage;

    /**
     * @var ?string $filtersAttributesPipeline Filter by the pipeline. Pass the pipeline id, retrievable from GET /crm/pipeline/details/{pipelineID}.
     */
    public ?string $filtersAttributesPipeline;

    /**
     * @var ?string $filtersLinkedCompaniesIds Filter by linked companies ids
     */
    public ?string $filtersLinkedCompaniesIds;

    /**
     * @var ?string $filtersLinkedContactsIds Filter by linked contacts ids
     */
    public ?string $filtersLinkedContactsIds;

    /**
     * @var ?string $modifiedSince Filter (urlencoded) the deals modified after a given UTC date-time (YYYY-MM-DDTHH:mm:ss.SSSZ). Prefer to pass your timezone in date-time format for accurate result.
     */
    public ?string $modifiedSince;

    /**
     * @var ?string $createdSince Filter (urlencoded) the deals created after a given UTC date-time (YYYY-MM-DDTHH:mm:ss.SSSZ). Prefer to pass your timezone in date-time format for accurate result.
     */
    public ?string $createdSince;

    /**
     * @var ?int $offset Index of the first document of the page
     */
    public ?int $offset;

    /**
     * @var ?int $limit Number of documents per page
     */
    public ?int $limit = 50;

    /**
     * @var ?value-of<GetCrmDealsRequestSort> $sort Sort the results in the ascending/descending order. Default order is **descending** by creation if `sort` is not passed
     */
    public ?string $sort;

    /**
     * @var ?string $sortBy The field used to sort field names.
     */
    public ?string $sortBy;

    /**
     * @param array{
     *   filtersAttributesDealName?: ?string,
     *   filtersAttributesDealOwner?: ?string,
     *   filtersAttributesDealStage?: ?string,
     *   filtersAttributesPipeline?: ?string,
     *   filtersLinkedCompaniesIds?: ?string,
     *   filtersLinkedContactsIds?: ?string,
     *   modifiedSince?: ?string,
     *   createdSince?: ?string,
     *   offset?: ?int,
     *   limit?: ?int,
     *   sort?: ?value-of<GetCrmDealsRequestSort>,
     *   sortBy?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->filtersAttributesDealName = $values['filtersAttributesDealName'] ?? null;
        $this->filtersAttributesDealOwner = $values['filtersAttributesDealOwner'] ?? null;
        $this->filtersAttributesDealStage = $values['filtersAttributesDealStage'] ?? null;
        $this->filtersAttributesPipeline = $values['filtersAttributesPipeline'] ?? null;
        $this->filtersLinkedCompaniesIds = $values['filtersLinkedCompaniesIds'] ?? null;
        $this->filtersLinkedContactsIds = $values['filtersLinkedContactsIds'] ?? null;
        $this->modifiedSince = $values['modifiedSince'] ?? null;
        $this->createdSince = $values['createdSince'] ?? null;
        $this->offset = $values['offset'] ?? null;
        $this->limit = $values['limit'] ?? null;
        $this->sort = $values['sort'] ?? null;
        $this->sortBy = $values['sortBy'] ?? null;
    }
}
