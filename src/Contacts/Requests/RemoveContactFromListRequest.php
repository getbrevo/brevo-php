<?php

namespace Brevo\Contacts\Requests;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Contacts\Types\RemoveContactFromListRequestBodyEmails;
use Brevo\Contacts\Types\RemoveContactFromListRequestBodyIds;
use Brevo\Contacts\Types\RemoveContactFromListRequestBodyAll;
use Brevo\Contacts\Types\RemoveContactFromListRequestBodyExtIds;

class RemoveContactFromListRequest extends JsonSerializableType
{
    /**
     * @var (
     *    RemoveContactFromListRequestBodyEmails
     *   |RemoveContactFromListRequestBodyIds
     *   |RemoveContactFromListRequestBodyAll
     *   |RemoveContactFromListRequestBodyExtIds
     * ) $body
     */
    public RemoveContactFromListRequestBodyEmails|RemoveContactFromListRequestBodyIds|RemoveContactFromListRequestBodyAll|RemoveContactFromListRequestBodyExtIds $body;

    /**
     * @param array{
     *   body: (
     *    RemoveContactFromListRequestBodyEmails
     *   |RemoveContactFromListRequestBodyIds
     *   |RemoveContactFromListRequestBodyAll
     *   |RemoveContactFromListRequestBodyExtIds
     * ),
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->body = $values['body'];
    }
}
