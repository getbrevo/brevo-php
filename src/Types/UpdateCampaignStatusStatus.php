<?php

namespace Brevo\Types;

enum UpdateCampaignStatusStatus: string
{
    case Suspended = "suspended";
    case Archive = "archive";
    case Darchive = "darchive";
    case Sent = "sent";
    case Queued = "queued";
    case Replicate = "replicate";
    case ReplicateTemplate = "replicateTemplate";
    case Draft = "draft";
}
