<?php

namespace Brevo\Program\Requests;

use Brevo\Core\Json\JsonSerializableType;

class DeleteContactMembersRequest extends JsonSerializableType
{
    /**
     * @var string $memberContactIds Comma-separated list of member contact IDs to delete from the subscription.
     */
    public string $memberContactIds;

    /**
     * @param array{
     *   memberContactIds: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->memberContactIds = $values['memberContactIds'];
    }
}
