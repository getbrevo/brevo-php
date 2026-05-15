<?php

namespace Brevo\Types;

enum BalanceDefinitionBalanceAvailabilityDurationModifier: string
{
    case NoModification = "noModification";
    case StartOfPeriod = "startOfPeriod";
    case EndOfPeriod = "endOfPeriod";
}
