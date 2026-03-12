<?php

namespace Brevo\EmailCampaigns\Types;

enum GetEmailCampaignsRequestStatus: string
{
    case Suspended = "suspended";
    case Archive = "archive";
    case Sent = "sent";
    case Queued = "queued";
    case Draft = "draft";
    case InProcess = "inProcess";
    case InReview = "inReview";
}
