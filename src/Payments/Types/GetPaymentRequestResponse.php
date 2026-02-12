<?php

namespace Brevo\Payments\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Types\Cart;
use Brevo\Core\Json\JsonProperty;
use Brevo\Types\Configuration;
use Brevo\Types\Notification;

class GetPaymentRequestResponse extends JsonSerializableType
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
     * @var ?int $contactId Brevo ID of the contact requested to pay.
     */
    #[JsonProperty('contactId')]
    public ?int $contactId;

    /**
     * @var Notification $notification
     */
    #[JsonProperty('notification')]
    public Notification $notification;

    /**
     * @var ?int $numberOfRemindersSent number of reminders sent.
     */
    #[JsonProperty('numberOfRemindersSent')]
    public ?int $numberOfRemindersSent;

    /**
     * @var string $reference Reference of the payment request, it will appear on the payment page.
     */
    #[JsonProperty('reference')]
    public string $reference;

    /**
     * @var value-of<GetPaymentRequestResponseStatus> $status Status of the payment request.
     */
    #[JsonProperty('status')]
    public string $status;

    /**
     * @param array{
     *   cart: Cart,
     *   notification: Notification,
     *   reference: string,
     *   status: value-of<GetPaymentRequestResponseStatus>,
     *   configuration?: ?Configuration,
     *   contactId?: ?int,
     *   numberOfRemindersSent?: ?int,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->cart = $values['cart'];
        $this->configuration = $values['configuration'] ?? null;
        $this->contactId = $values['contactId'] ?? null;
        $this->notification = $values['notification'];
        $this->numberOfRemindersSent = $values['numberOfRemindersSent'] ?? null;
        $this->reference = $values['reference'];
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
