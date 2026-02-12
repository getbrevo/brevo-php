<?php

namespace Brevo\MasterAccount\Requests;

use Brevo\Core\Json\JsonSerializableType;

class GetCorporateInvitedUsersListRequest extends JsonSerializableType
{
    /**
     * User type (active | pending). This is required if offset is provided for
     * limited result.
     *
     * @var ?string $type
     */
    public ?string $type;

    /**
     * Page number for the result set. This is optional, default value will be
     * the 1st page.
     *
     * @var ?int $offset
     */
    public ?int $offset;

    /**
     * Number of users to be displayed on each page. This is optional, the
     * default limit is 20, but max allowed limit is 100.
     *
     * @var ?int $limit
     */
    public ?int $limit;

    /**
     * @param array{
     *   type?: ?string,
     *   offset?: ?int,
     *   limit?: ?int,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->type = $values['type'] ?? null;
        $this->offset = $values['offset'] ?? null;
        $this->limit = $values['limit'] ?? null;
    }
}
