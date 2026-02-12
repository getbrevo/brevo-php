<?php

namespace Brevo\InboundParsing\Types;

enum GetInboundEmailEventsByUuidResponseLogsItemType: string
{
    case Received = "received";
    case Processed = "processed";
    case WebhookFailed = "webhookFailed";
    case WebhookDelivered = "webhookDelivered";
}
