<?php

namespace Brevo\Reward\Requests;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Reward\Types\GetLoyaltyOfferProgramsPidOffersRequestVersion;

class GetLoyaltyOfferProgramsPidOffersRequest extends JsonSerializableType
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
     * @var ?string $state State of the reward
     */
    public ?string $state = 'all';

    /**
     * @var ?value-of<GetLoyaltyOfferProgramsPidOffersRequestVersion> $version Version
     */
    public ?string $version;

    /**
     * @param array{
     *   limit?: ?int,
     *   offset?: ?int,
     *   state?: ?string,
     *   version?: ?value-of<GetLoyaltyOfferProgramsPidOffersRequestVersion>,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->limit = $values['limit'] ?? null;
        $this->offset = $values['offset'] ?? null;
        $this->state = $values['state'] ?? null;
        $this->version = $values['version'] ?? null;
    }
}
