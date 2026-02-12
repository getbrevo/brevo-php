<?php

namespace Brevo\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;
use Brevo\Core\Types\Union;

class PostContactInfoContacts extends JsonSerializableType
{
    /**
     * @var (
     *    array<string>
     *   |array<int>
     * )|null $failure
     */
    #[JsonProperty('failure'), Union(['string'], ['integer'], 'null')]
    public array|null $failure;

    /**
     * @var ?int $processId Id of the process created to remove contacts from list when user opts for "all" option.
     */
    #[JsonProperty('processId')]
    public ?int $processId;

    /**
     * @var (
     *    array<string>
     *   |array<int>
     * )|null $success
     */
    #[JsonProperty('success'), Union(['string'], ['integer'], 'null')]
    public array|null $success;

    /**
     * @var ?int $total Displays the count of total number of contacts removed from list when user opts for "all" option.
     */
    #[JsonProperty('total')]
    public ?int $total;

    /**
     * @param array{
     *   failure?: (
     *    array<string>
     *   |array<int>
     * )|null,
     *   processId?: ?int,
     *   success?: (
     *    array<string>
     *   |array<int>
     * )|null,
     *   total?: ?int,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->failure = $values['failure'] ?? null;
        $this->processId = $values['processId'] ?? null;
        $this->success = $values['success'] ?? null;
        $this->total = $values['total'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
