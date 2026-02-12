<?php

namespace Brevo\Program\Types;

enum GetLpListRequestSortField: string
{
    case Name = "name";
    case CreatedAt = "created_at";
    case UpdatedAt = "updated_at";
}
