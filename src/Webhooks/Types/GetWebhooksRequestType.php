<?php

namespace Brevo\Webhooks\Types;

enum GetWebhooksRequestType: string
{
    case Marketing = "marketing";
    case Transactional = "transactional";
    case Inbound = "inbound";
}
