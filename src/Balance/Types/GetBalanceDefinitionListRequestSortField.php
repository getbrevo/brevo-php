<?php

namespace Brevo\Balance\Types;

enum GetBalanceDefinitionListRequestSortField: string
{
    case Name = "name";
    case CreatedAt = "created_at";
    case UpdatedAt = "updated_at";
}
