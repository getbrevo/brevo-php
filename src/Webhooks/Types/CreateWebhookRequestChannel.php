<?php

namespace Brevo\Webhooks\Types;

enum CreateWebhookRequestChannel: string
{
    case Sms = "sms";
    case Email = "email";
}
