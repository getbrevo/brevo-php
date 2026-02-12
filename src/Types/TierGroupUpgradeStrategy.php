<?php

namespace Brevo\Types;

enum TierGroupUpgradeStrategy: string
{
    case RealTime = "real_time";
    case MembershipAnniversary = "membership_anniversary";
    case TierAnniversary = "tier_anniversary";
}
