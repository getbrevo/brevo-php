<?php

namespace Brevo\Tier\Types;

enum UpdateTierGroupRequestUpgradeStrategy: string
{
    case RealTime = "real_time";
    case MembershipAnniversary = "membership_anniversary";
    case TierAnniversary = "tier_anniversary";
}
