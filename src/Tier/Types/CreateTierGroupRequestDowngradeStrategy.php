<?php

namespace Brevo\Tier\Types;

enum CreateTierGroupRequestDowngradeStrategy: string
{
    case RealTime = "real_time";
    case MembershipAnniversary = "membership_anniversary";
    case TierAnniversary = "tier_anniversary";
}
