<?php

namespace Brevo\Reward\Requests;

use Brevo\Core\Json\JsonSerializableType;

class RevokeVouchersRequest extends JsonSerializableType
{
    /**
     * @var ?string $attributedRewardIds Reward Attribution IDs (comma seperated)
     */
    public ?string $attributedRewardIds;

    /**
     * @param array{
     *   attributedRewardIds?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->attributedRewardIds = $values['attributedRewardIds'] ?? null;
    }
}
