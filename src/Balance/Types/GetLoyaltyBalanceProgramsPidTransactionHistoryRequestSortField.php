<?php

namespace Brevo\Balance\Types;

enum GetLoyaltyBalanceProgramsPidTransactionHistoryRequestSortField: string
{
    case Name = "name";
    case CreatedAt = "created_at";
    case UpdatedAt = "updated_at";
}
