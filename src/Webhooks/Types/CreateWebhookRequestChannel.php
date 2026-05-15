<?php

namespace Brevo\Webhooks\Types;

enum CreateWebhookRequestChannel: string
{
    case Email = "email";
    case Sms = "sms";
}
