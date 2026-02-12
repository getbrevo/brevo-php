<?php

namespace Brevo\Balance\Types;

enum UpdateBalanceLimitRequestConstraintType: string
{
    case Transaction = "transaction";
    case Amount = "amount";
}
