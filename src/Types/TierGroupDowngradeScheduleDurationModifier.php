<?php

namespace Brevo\Types;

enum TierGroupDowngradeScheduleDurationModifier: string
{
    case StartOfPeriod = "start_of_period";
    case EndOfPeriod = "end_of_period";
}
