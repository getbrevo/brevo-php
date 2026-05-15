<?php

namespace Brevo\Types;

enum BalanceLimitConstraintType: string
{
    case Transaction = "transaction";
    case Amount = "amount";
}
