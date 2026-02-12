<?php

namespace Brevo\EmailCampaigns\Types;

enum GetEmailCampaignRequestStatistics: string
{
    case GlobalStats = "globalStats";
    case LinksStats = "linksStats";
    case StatsByDomain = "statsByDomain";
    case StatsByDevice = "statsByDevice";
    case StatsByBrowser = "statsByBrowser";
}
