<?php

namespace Brevo\Types;

enum GetWebhookChannel: string
{
    case Sms = "sms";
    case Email = "email";
}
