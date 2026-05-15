<?php

namespace Brevo\Types;

enum TierGroupUpgradeScheduleDurationModifier: string
{
    case StartOfPeriod = "start_of_period";
    case EndOfPeriod = "end_of_period";
}
