<?php

namespace Brevo\Tier\Types;

enum CreateTierGroupRequestDowngradeScheduleDurationModifier: string
{
    case StartOfPeriod = "start_of_period";
    case EndOfPeriod = "end_of_period";
}
