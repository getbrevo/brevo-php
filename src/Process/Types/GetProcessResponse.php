<?php

namespace Brevo\Process\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;

class GetProcessResponse extends JsonSerializableType
{
    /**
     * @var int $id Unique identifier of the process
     */
    #[JsonProperty('id')]
    public int $id;

    /**
     * @var value-of<GetProcessResponseName> $name Name/type of the process
     */
    #[JsonProperty('name')]
    public string $name;

    /**
     * @var value-of<GetProcessResponseStatus> $status Current status of the process
     */
    #[JsonProperty('status')]
    public string $status;

    /**
     * @var ?GetProcessResponseInfo $info Additional process information, only returned for completed IMPORTUSER processes. Contains URLs to CSV files with details about problematic records.
     */
    #[JsonProperty('info')]
    public ?GetProcessResponseInfo $info;

    /**
     * @var ?string $exportUrl Download URL for completed export processes (returned for SEARCH_EXPORT_USERS, SEARCH_EXPORT_USERS_API, CAMPAIGN_USER_DETAILS, and EXPORT_WEBHOOK process types)
     */
    #[JsonProperty('export_url')]
    public ?string $exportUrl;

    /**
     * @param array{
     *   id: int,
     *   name: value-of<GetProcessResponseName>,
     *   status: value-of<GetProcessResponseStatus>,
     *   info?: ?GetProcessResponseInfo,
     *   exportUrl?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->id = $values['id'];
        $this->name = $values['name'];
        $this->status = $values['status'];
        $this->info = $values['info'] ?? null;
        $this->exportUrl = $values['exportUrl'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
