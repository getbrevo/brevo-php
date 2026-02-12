<?php

namespace Brevo\SmsCampaigns\Types;

enum GetSmsCampaignsRequestStatus: string
{
    case Suspended = "suspended";
    case Archive = "archive";
    case Sent = "sent";
    case Queued = "queued";
    case Draft = "draft";
    case InProcess = "inProcess";
}
