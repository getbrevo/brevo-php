<?php

namespace Brevo\SmsTemplates;

use Brevo\SmsTemplates\Requests\GetSmsTemplatesRequest;
use Brevo\SmsTemplates\Types\GetSmsTemplatesResponse;

interface SmsTemplatesClientInterface
{
    /**
     * @param GetSmsTemplatesRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return GetSmsTemplatesResponse
     */
    public function getSmsTemplates(GetSmsTemplatesRequest $request = new GetSmsTemplatesRequest(), ?array $options = null): GetSmsTemplatesResponse;
}
