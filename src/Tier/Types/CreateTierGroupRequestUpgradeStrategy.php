<?php

namespace Brevo\Tier\Types;

enum CreateTierGroupRequestUpgradeStrategy: string
{
    case RealTime = "real_time";
    case MembershipAnniversary = "membership_anniversary";
    case TierAnniversary = "tier_anniversary";
}
