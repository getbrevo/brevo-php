<?php

namespace Brevo\MasterAccount\Requests;

use Brevo\Core\Json\JsonSerializableType;

class GetCorporateSubAccountRequest extends JsonSerializableType
{
    /**
     * @var int $offset Index of the first sub-account in the page
     */
    public int $offset;

    /**
     * @var int $limit Number of sub-accounts to be displayed on each page
     */
    public int $limit;

    /**
     * @param array{
     *   offset: int,
     *   limit: int,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->offset = $values['offset'];
        $this->limit = $values['limit'];
    }
}
