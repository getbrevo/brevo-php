<?php

namespace Brevo\Types;

enum GetExtendedCampaignOverviewEmailExpirationDateUnit: string
{
    case Days = "days";
    case Weeks = "weeks";
    case Months = "months";
}
