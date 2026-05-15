<?php

namespace Brevo\Balance\Types;

enum GetContactBalancesRequestSortField: string
{
    case UpdatedAt = "updatedAt";
    case Value = "value";
}
