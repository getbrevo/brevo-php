<?php

namespace Brevo\Reward\Types;

enum GetLoyaltyOfferProgramsPidRewardsRidResponseExpirationModifier: string
{
    case StartOfPeriod = "startOfPeriod";
    case EndOfPeriod = "endOfPeriod";
    case NoModification = "noModification";
}
