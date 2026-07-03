<?php

namespace Brevo\ConsentGroups\Types;

enum CreateConsentGroupRequestSignupMode: string
{
    case Manual = "manual";
    case Automatic = "automatic";
}
