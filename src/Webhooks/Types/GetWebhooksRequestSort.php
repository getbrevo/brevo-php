<?php

namespace Brevo\Webhooks\Types;

enum GetWebhooksRequestSort: string
{
    case Asc = "asc";
    case Desc = "desc";
}
