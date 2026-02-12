<?php

namespace Brevo\Types;

enum BalanceDefinitionBalanceAvailabilityDurationModifier: string
{
    case StartOfPeriod = "startOfPeriod";
    case EndOfPeriod = "endOfPeriod";
    case NoModification = "noModification";
}
