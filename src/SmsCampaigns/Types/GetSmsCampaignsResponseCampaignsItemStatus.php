<?php

namespace Brevo\SmsCampaigns\Types;

enum GetSmsCampaignsResponseCampaignsItemStatus: string
{
    case Draft = "draft";
    case Sent = "sent";
    case Archive = "archive";
    case Queued = "queued";
    case Suspended = "suspended";
    case InProcess = "inProcess";
}
