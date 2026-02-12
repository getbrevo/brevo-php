<?php

namespace Brevo\Contacts\Types;

enum RequestContactExportRequestCustomContactFilterActionForSmsCampaigns: string
{
    case HardBounces = "hardBounces";
    case SoftBounces = "softBounces";
    case Unsubscribed = "unsubscribed";
}
