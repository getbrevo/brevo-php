<?php

namespace Brevo\MasterAccount\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;

class PostCorporateSubAccountKeyResponse extends JsonSerializableType
{
    /**
     * @var string $key API key
     */
    #[JsonProperty('key')]
    public string $key;

    /**
     * @var string $status Status of the API operation.
     */
    #[JsonProperty('status')]
    public string $status;

    /**
     * @param array{
     *   key: string,
     *   status: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->key = $values['key'];
        $this->status = $values['status'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
