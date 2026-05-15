<?php

namespace Brevo\Payments;

use Brevo\Payments\Requests\CreatePaymentRequestRequest;
use Brevo\Payments\Types\CreatePaymentRequestResponse;
use Brevo\Payments\Types\GetPaymentRequestResponse;

interface PaymentsClientInterface
{
    /**
     * Create a new payment request for a Brevo contact. The request requires a reference (displayed on the payment page), a contact ID, and a cart with currency and amount in cents. You can optionally configure a custom success redirect URL and enable email notifications with reminders. Returns the payment request ID and its public payment URL. A `403` error is returned if Brevo Payments is not activated or the account is not validated.
     *
     * @param CreatePaymentRequestRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?CreatePaymentRequestResponse
     */
    public function createPaymentRequest(CreatePaymentRequestRequest $request, ?array $options = null): ?CreatePaymentRequestResponse;

    /**
     * Retrieve the details of a specific payment request by its ID. The response includes the reference, status (created, sent, reminderSent, or paid), cart details, notification configuration, contact ID, and the number of reminders sent. Returns a `404` error if no payment request matches the provided ID.
     *
     * @param string $id Id of the payment Request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?GetPaymentRequestResponse
     */
    public function getPaymentRequest(string $id, ?array $options = null): ?GetPaymentRequestResponse;

    /**
     * Delete a payment request by its UUID. Once deleted, the payment request can no longer be accessed or paid. Returns a `404` error if no payment request matches the provided ID, and a `403` error if Brevo Payments is not activated or the account is not validated.
     *
     * @param string $id ID of the payment request.
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     */
    public function deletePaymentRequest(string $id, ?array $options = null): void;
}
