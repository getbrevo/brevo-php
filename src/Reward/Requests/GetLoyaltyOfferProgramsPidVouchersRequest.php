<?php

namespace Brevo\Reward\Requests;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Reward\Types\GetLoyaltyOfferProgramsPidVouchersRequestSort;
use Brevo\Reward\Types\GetLoyaltyOfferProgramsPidVouchersRequestSortField;

class GetLoyaltyOfferProgramsPidVouchersRequest extends JsonSerializableType
{
    /**
     * @var ?int $limit Page size
     */
    public ?int $limit = 25;

    /**
     * @var ?int $offset Pagination offset
     */
    public ?int $offset = 0;

    /**
     * @var ?value-of<GetLoyaltyOfferProgramsPidVouchersRequestSort> $sort Sort order
     */
    public ?string $sort;

    /**
     * @var ?value-of<GetLoyaltyOfferProgramsPidVouchersRequestSortField> $sortField Sort field
     */
    public ?string $sortField;

    /**
     * @var int $contactId Contact ID
     */
    public int $contactId;

    /**
     * @var ?string $metadataKeyValue Metadata value for a Key filter
     */
    public ?string $metadataKeyValue;

    /**
     * @var ?string $rewardId Reward ID
     */
    public ?string $rewardId;

    /**
     * @param array{
     *   contactId: int,
     *   limit?: ?int,
     *   offset?: ?int,
     *   sort?: ?value-of<GetLoyaltyOfferProgramsPidVouchersRequestSort>,
     *   sortField?: ?value-of<GetLoyaltyOfferProgramsPidVouchersRequestSortField>,
     *   metadataKeyValue?: ?string,
     *   rewardId?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->limit = $values['limit'] ?? null;
        $this->offset = $values['offset'] ?? null;
        $this->sort = $values['sort'] ?? null;
        $this->sortField = $values['sortField'] ?? null;
        $this->contactId = $values['contactId'];
        $this->metadataKeyValue = $values['metadataKeyValue'] ?? null;
        $this->rewardId = $values['rewardId'] ?? null;
    }
}
