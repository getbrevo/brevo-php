<?php

namespace Brevo\Contacts\Requests;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Contacts\Types\AddContactToListRequestBodyEmails;
use Brevo\Contacts\Types\AddContactToListRequestBodyIds;
use Brevo\Contacts\Types\AddContactToListRequestBodyExtIds;

class AddContactToListRequest extends JsonSerializableType
{
    /**
     * @var (
     *    AddContactToListRequestBodyEmails
     *   |AddContactToListRequestBodyIds
     *   |AddContactToListRequestBodyExtIds
     * ) $body
     */
    public AddContactToListRequestBodyEmails|AddContactToListRequestBodyIds|AddContactToListRequestBodyExtIds $body;

    /**
     * @param array{
     *   body: (
     *    AddContactToListRequestBodyEmails
     *   |AddContactToListRequestBodyIds
     *   |AddContactToListRequestBodyExtIds
     * ),
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->body = $values['body'];
    }
}
