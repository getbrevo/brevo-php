<?php

namespace Brevo\Types;

enum GetWebhookType: string
{
    case Marketing = "marketing";
    case Transactional = "transactional";
}
