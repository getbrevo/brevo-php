<?php

namespace Brevo\Contacts\Types;

enum RequestContactExportRequestCustomContactFilterActionForEmailCampaigns: string
{
    case Openers = "openers";
    case NonOpeners = "nonOpeners";
    case Clickers = "clickers";
    case NonClickers = "nonClickers";
    case Unsubscribed = "unsubscribed";
    case HardBounces = "hardBounces";
    case SoftBounces = "softBounces";
}
