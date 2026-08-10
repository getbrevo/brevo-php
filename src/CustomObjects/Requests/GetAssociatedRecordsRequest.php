<?php

namespace Brevo\CustomObjects\Requests;

use Brevo\Core\Json\JsonSerializableType;

class GetAssociatedRecordsRequest extends JsonSerializableType
{
    /**
     * @var ?int $id Internal Brevo ID of the source record. Must be a positive integer. Provide exactly one of `id`, `ext_id`, `email` or `sms`.
     */
    public ?int $id;

    /**
     * @var ?string $extId External ID of the source record in your system. Provide exactly one of `id`, `ext_id`, `email` or `sms`.
     */
    public ?string $extId;

    /**
     * @var ?string $email Email address of the source contact. Only accepted when `object_type` is `contact`. Provide exactly one of `id`, `ext_id`, `email` or `sms`.
     */
    public ?string $email;

    /**
     * @var ?string $sms Phone number of the source contact, including the country code. It may be given with or without a leading `+`; percent-encode the `+` as `%2B`, because a literal `+` in a query string is read as a space. Only accepted when `object_type` is `contact`. Provide exactly one of `id`, `ext_id`, `email` or `sms`.
     */
    public ?string $sms;

    /**
     * @var ?array<string> $type Restricts the response to the given associated object types. Repeat the parameter to request several types, for example `?type=contact&type=garage`. Maximum 5 types per call. Associations of every type are returned when omitted.
     */
    public ?array $type;

    /**
     * @var ?int $offset Number of records to skip before the first record of the page. Defaults to 0. Increase by 20 to fetch the next page.
     */
    public ?int $offset = 0;

    /**
     * @param array{
     *   id?: ?int,
     *   extId?: ?string,
     *   email?: ?string,
     *   sms?: ?string,
     *   type?: ?array<string>,
     *   offset?: ?int,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->id = $values['id'] ?? null;
        $this->extId = $values['extId'] ?? null;
        $this->email = $values['email'] ?? null;
        $this->sms = $values['sms'] ?? null;
        $this->type = $values['type'] ?? null;
        $this->offset = $values['offset'] ?? null;
    }
}
