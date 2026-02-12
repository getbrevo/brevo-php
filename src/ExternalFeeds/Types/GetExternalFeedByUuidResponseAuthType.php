<?php

namespace Brevo\ExternalFeeds\Types;

enum GetExternalFeedByUuidResponseAuthType: string
{
    case Basic = "basic";
    case Token = "token";
    case NoAuth = "noAuth";
}
