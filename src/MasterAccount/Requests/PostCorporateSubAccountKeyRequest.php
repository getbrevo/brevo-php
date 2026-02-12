<?php

namespace Brevo\MasterAccount\Requests;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;

class PostCorporateSubAccountKeyRequest extends JsonSerializableType
{
    /**
     * @var int $id Id of the sub-account organization
     */
    #[JsonProperty('id')]
    public int $id;

    /**
     * @var string $name Name of the API key
     */
    #[JsonProperty('name')]
    public string $name;

    /**
     * @param array{
     *   id: int,
     *   name: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->id = $values['id'];
        $this->name = $values['name'];
    }
}
