<?php

namespace Brevo\ConsentGroups\Types;

enum GetConsentGroupsRequestSignupMode: string
{
    case Manual = "manual";
    case Automatic = "automatic";
}
