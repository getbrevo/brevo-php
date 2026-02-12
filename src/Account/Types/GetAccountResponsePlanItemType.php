<?php

namespace Brevo\Account\Types;

enum GetAccountResponsePlanItemType: string
{
    case PayAsYouGo = "payAsYouGo";
    case Free = "free";
    case Subscription = "subscription";
    case Sms = "sms";
}
