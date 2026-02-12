<?php

namespace Brevo\ExternalFeeds\Types;

enum GetAllExternalFeedsResponseFeedsItemAuthType: string
{
    case Basic = "basic";
    case Token = "token";
    case NoAuth = "noAuth";
}
