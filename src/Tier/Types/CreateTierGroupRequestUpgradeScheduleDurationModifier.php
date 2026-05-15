<?php

namespace Brevo\Tier\Types;

enum CreateTierGroupRequestUpgradeScheduleDurationModifier: string
{
    case StartOfPeriod = "start_of_period";
    case EndOfPeriod = "end_of_period";
}
