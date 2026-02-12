<?php

namespace Brevo\SmsCampaigns\Types;

enum RequestSmsRecipientExportRequestRecipientsType: string
{
    case All = "all";
    case Delivered = "delivered";
    case Answered = "answered";
    case SoftBounces = "softBounces";
    case HardBounces = "hardBounces";
    case Unsubscribed = "unsubscribed";
}
