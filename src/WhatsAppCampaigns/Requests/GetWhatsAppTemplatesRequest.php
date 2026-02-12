<?php

namespace Brevo\WhatsAppCampaigns\Requests;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\WhatsAppCampaigns\Types\GetWhatsAppTemplatesRequestSort;
use Brevo\WhatsAppCampaigns\Types\GetWhatsAppTemplatesRequestSource;

class GetWhatsAppTemplatesRequest extends JsonSerializableType
{
    /**
     * @var ?string $startDate **Mandatory if endDate is used**. Starting (urlencoded) UTC date-time (YYYY-MM-DDTHH:mm:ss.SSSZ) to filter the templates created. **Prefer to pass your timezone in date-time format for accurate result**
     */
    public ?string $startDate;

    /**
     * @var ?string $endDate **Mandatory if startDate is used**. Ending (urlencoded) UTC date-time (YYYY-MM-DDTHH:mm:ss.SSSZ) to filter the templates created. **Prefer to pass your timezone in date-time format for accurate result**
     */
    public ?string $endDate;

    /**
     * @var ?int $limit Number of documents per page
     */
    public ?int $limit = 50;

    /**
     * @var ?int $offset Index of the first document in the page
     */
    public ?int $offset = 0;

    /**
     * @var ?value-of<GetWhatsAppTemplatesRequestSort> $sort Sort the results in the ascending/descending order of record modification. Default order is **descending** if `sort` is not passed
     */
    public ?string $sort;

    /**
     * @var ?value-of<GetWhatsAppTemplatesRequestSource> $source source of the template
     */
    public ?string $source;

    /**
     * @param array{
     *   startDate?: ?string,
     *   endDate?: ?string,
     *   limit?: ?int,
     *   offset?: ?int,
     *   sort?: ?value-of<GetWhatsAppTemplatesRequestSort>,
     *   source?: ?value-of<GetWhatsAppTemplatesRequestSource>,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->startDate = $values['startDate'] ?? null;
        $this->endDate = $values['endDate'] ?? null;
        $this->limit = $values['limit'] ?? null;
        $this->offset = $values['offset'] ?? null;
        $this->sort = $values['sort'] ?? null;
        $this->source = $values['source'] ?? null;
    }
}
