<?php

namespace Brevo\Ecommerce\Requests;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;
use Brevo\Types\Order;
use Brevo\Core\Types\ArrayType;

class CreateBatchOrderRequest extends JsonSerializableType
{
    /**
     * @var ?bool $historical Defines wether you want your orders to be considered as live data or as historical data (import of past data, synchronising data). True: orders will not trigger any automation workflows. False: orders will trigger workflows as usual.
     */
    #[JsonProperty('historical')]
    public ?bool $historical;

    /**
     * @var ?string $notifyUrl Notify Url provided by client_dev to get the status of batch request
     */
    #[JsonProperty('notifyUrl')]
    public ?string $notifyUrl;

    /**
     * @var array<Order> $orders array of order objects
     */
    #[JsonProperty('orders'), ArrayType([Order::class])]
    public array $orders;

    /**
     * @param array{
     *   orders: array<Order>,
     *   historical?: ?bool,
     *   notifyUrl?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->historical = $values['historical'] ?? null;
        $this->notifyUrl = $values['notifyUrl'] ?? null;
        $this->orders = $values['orders'];
    }
}
