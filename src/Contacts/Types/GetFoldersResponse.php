<?php

namespace Brevo\Contacts\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;
use Brevo\Types\GetFolder;
use Brevo\Core\Types\ArrayType;

class GetFoldersResponse extends JsonSerializableType
{
    /**
     * @var ?int $count Number of folders available in your account
     */
    #[JsonProperty('count')]
    public ?int $count;

    /**
     * @var ?array<GetFolder> $folders
     */
    #[JsonProperty('folders'), ArrayType([GetFolder::class])]
    public ?array $folders;

    /**
     * @param array{
     *   count?: ?int,
     *   folders?: ?array<GetFolder>,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->count = $values['count'] ?? null;
        $this->folders = $values['folders'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
