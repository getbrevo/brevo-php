<?php

namespace Brevo\Webhooks\Requests;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Webhooks\Types\GetWebhooksRequestType;
use Brevo\Webhooks\Types\GetWebhooksRequestSort;

class GetWebhooksRequest extends JsonSerializableType
{
    /**
     * @var ?value-of<GetWebhooksRequestType> $type Filter on webhook type
     */
    public ?string $type;

    /**
     * @var ?value-of<GetWebhooksRequestSort> $sort Sort the results in the ascending/descending order of webhook creation
     */
    public ?string $sort;

    /**
     * @param array{
     *   type?: ?value-of<GetWebhooksRequestType>,
     *   sort?: ?value-of<GetWebhooksRequestSort>,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->type = $values['type'] ?? null;
        $this->sort = $values['sort'] ?? null;
    }
}
