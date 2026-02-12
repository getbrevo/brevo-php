<?php

namespace Brevo\Webhooks\Types;

enum ExportWebhooksHistoryRequestType: string
{
    case Transactional = "transactional";
    case Marketing = "marketing";
}
