<?php

namespace Brevo\Payments;

use Brevo\Payments\Requests\CreatePaymentRequestRequest;
use Brevo\Payments\Types\CreatePaymentRequestResponse;
use Brevo\Payments\Types\GetPaymentRequestResponse;

interface PaymentsClientInterface
{
    /**
     * @param CreatePaymentRequestRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return CreatePaymentRequestResponse
     */
    public function createPaymentRequest(CreatePaymentRequestRequest $request, ?array $options = null): CreatePaymentRequestResponse;

    /**
     * @param string $id Id of the payment Request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return GetPaymentRequestResponse
     */
    public function getPaymentRequest(string $id, ?array $options = null): GetPaymentRequestResponse;

    /**
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
