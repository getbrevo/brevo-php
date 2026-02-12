<?php

namespace Brevo\EmailCampaigns\Types;

enum EmailExportRecipientsRequestRecipientsType: string
{
    case All = "all";
    case NonClickers = "nonClickers";
    case NonOpeners = "nonOpeners";
    case Clickers = "clickers";
    case Openers = "openers";
    case SoftBounces = "softBounces";
    case HardBounces = "hardBounces";
    case Unsubscribed = "unsubscribed";
}
