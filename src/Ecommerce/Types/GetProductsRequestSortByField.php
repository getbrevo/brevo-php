<?php

namespace Brevo\Ecommerce\Types;

enum GetProductsRequestSortByField: string
{
    case CreatedAt = "created_at";
    case Name = "name";
    case Price = "price";
    case Id = "id";
}
