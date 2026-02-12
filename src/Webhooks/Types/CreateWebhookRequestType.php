<?php

namespace Brevo\Webhooks\Types;

enum CreateWebhookRequestType: string
{
    case Transactional = "transactional";
    case Marketing = "marketing";
    case Inbound = "inbound";
}
