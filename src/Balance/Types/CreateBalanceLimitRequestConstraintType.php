<?php

namespace Brevo\Balance\Types;

enum CreateBalanceLimitRequestConstraintType: string
{
    case Transaction = "transaction";
    case Amount = "amount";
}
