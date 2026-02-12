<?php

namespace Brevo\Balance\Types;

enum PostLoyaltyBalanceProgramsPidBalanceDefinitionsRequestBalanceAvailabilityDurationModifier: string
{
    case NoModification = "noModification";
    case StartOfPeriod = "startOfPeriod";
    case EndOfPeriod = "endOfPeriod";
}
