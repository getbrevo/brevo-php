<?php

namespace Brevo\EmailCampaigns\Types;

enum GetEmailCampaignsRequestStatistics: string
{
    case GlobalStats = "globalStats";
    case LinksStats = "linksStats";
    case StatsByDomain = "statsByDomain";
}
