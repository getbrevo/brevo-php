<?php

namespace Brevo\Coupons\Types;

enum GetCouponCollectionsRequestSortBy: string
{
    case CreatedAt = "createdAt";
    case RemainingCoupons = "remainingCoupons";
    case ExpirationDate = "expirationDate";
}
