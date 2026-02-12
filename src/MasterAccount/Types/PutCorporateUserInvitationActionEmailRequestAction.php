<?php

namespace Brevo\MasterAccount\Types;

enum PutCorporateUserInvitationActionEmailRequestAction: string
{
    case Resend = "resend";
    case Cancel = "cancel";
}
