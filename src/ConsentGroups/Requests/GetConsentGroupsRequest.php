<?php

namespace Brevo\ConsentGroups\Requests;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\ConsentGroups\Types\GetConsentGroupsRequestSignupMode;

class GetConsentGroupsRequest extends JsonSerializableType
{
    /**
     * @var ?int $limit Maximum number of results to return (default 10, max 50)
     */
    public ?int $limit = 10;

    /**
     * @var ?int $offset Number of results to skip (default 0)
     */
    public ?int $offset = 0;

    /**
     * @var ?int $id Filter by consent group ID
     */
    public ?int $id;

    /**
     * @var ?string $name Filter by name (case-insensitive partial match)
     */
    public ?string $name;

    /**
     * @var ?value-of<GetConsentGroupsRequestSignupMode> $signupMode Filter by signup mode
     */
    public ?string $signupMode;

    /**
     * @param array{
     *   limit?: ?int,
     *   offset?: ?int,
     *   id?: ?int,
     *   name?: ?string,
     *   signupMode?: ?value-of<GetConsentGroupsRequestSignupMode>,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->limit = $values['limit'] ?? null;
        $this->offset = $values['offset'] ?? null;
        $this->id = $values['id'] ?? null;
        $this->name = $values['name'] ?? null;
        $this->signupMode = $values['signupMode'] ?? null;
    }
}
