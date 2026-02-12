<?php

namespace Brevo\Contacts\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;
use Brevo\Core\Types\ArrayType;

class GetContactStatsResponseUnsubscriptions extends JsonSerializableType
{
    /**
     * @var array<GetContactStatsResponseUnsubscriptionsAdminUnsubscriptionItem> $adminUnsubscription Contact has been unsubscribed from the administrator
     */
    #[JsonProperty('adminUnsubscription'), ArrayType([GetContactStatsResponseUnsubscriptionsAdminUnsubscriptionItem::class])]
    public array $adminUnsubscription;

    /**
     * @var array<GetContactStatsResponseUnsubscriptionsUserUnsubscriptionItem> $userUnsubscription Contact has unsubscribed via the unsubscription link in the email
     */
    #[JsonProperty('userUnsubscription'), ArrayType([GetContactStatsResponseUnsubscriptionsUserUnsubscriptionItem::class])]
    public array $userUnsubscription;

    /**
     * @param array{
     *   adminUnsubscription: array<GetContactStatsResponseUnsubscriptionsAdminUnsubscriptionItem>,
     *   userUnsubscription: array<GetContactStatsResponseUnsubscriptionsUserUnsubscriptionItem>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->adminUnsubscription = $values['adminUnsubscription'];
        $this->userUnsubscription = $values['userUnsubscription'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
