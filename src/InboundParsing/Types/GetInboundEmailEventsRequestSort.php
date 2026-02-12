<?php

namespace Brevo\InboundParsing\Types;

enum GetInboundEmailEventsRequestSort: string
{
    case Asc = "asc";
    case Desc = "desc";
}
