<?php

namespace Brevo\Balance\Types;

enum UpdateBalanceDefinitionRequestBalanceAvailabilityDurationModifier: string
{
    case NoModification = "noModification";
    case StartOfPeriod = "startOfPeriod";
    case EndOfPeriod = "endOfPeriod";
}
