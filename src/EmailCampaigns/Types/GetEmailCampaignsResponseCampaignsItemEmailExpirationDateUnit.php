<?php

namespace Brevo\EmailCampaigns\Types;

enum GetEmailCampaignsResponseCampaignsItemEmailExpirationDateUnit: string
{
    case Days = "days";
    case Weeks = "weeks";
    case Months = "months";
}
