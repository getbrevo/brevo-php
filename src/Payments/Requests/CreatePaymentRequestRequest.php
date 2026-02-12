<?php

namespace Brevo\Payments\Requests;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Types\Cart;
use Brevo\Core\Json\JsonProperty;
use Brevo\Types\Configuration;
use Brevo\Types\Notification;

class CreatePaymentRequestRequest extends JsonSerializableType
{
    /**
     * @var Cart $cart
     */
    #[JsonProperty('cart')]
    public Cart $cart;

    /**
     * @var ?Configuration $configuration
     */
    #[JsonProperty('configuration')]
    public ?Configuration $configuration;

    /**
     * @var int $contactId Brevo ID of the contact requested to pay.
     */
    #[JsonProperty('contactId')]
    public int $contactId;

    /**
     * @var ?string $description Description of payment request.
     */
    #[JsonProperty('description')]
    public ?string $description;

    /**
     * @var ?Notification $notification
     */
    #[JsonProperty('notification')]
    public ?Notification $notification;

    /**
     * @var string $reference Reference of the payment request, it will appear on the payment page.
     */
    #[JsonProperty('reference')]
    public string $reference;

    /**
     * @param array{
     *   cart: Cart,
     *   contactId: int,
     *   reference: string,
     *   configuration?: ?Configuration,
     *   description?: ?string,
     *   notification?: ?Notification,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->cart = $values['cart'];
        $this->configuration = $values['configuration'] ?? null;
        $this->contactId = $values['contactId'];
        $this->description = $values['description'] ?? null;
        $this->notification = $values['notification'] ?? null;
        $this->reference = $values['reference'];
    }
}
