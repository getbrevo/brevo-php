<?php

namespace Brevo\Process\Types;

enum GetProcessResponseName: string
{
    case Importuser = "IMPORTUSER";
    case SearchExportUsers = "SEARCH_EXPORT_USERS";
    case TransCalc = "TRANS-CALC";
    case TransGlobalCalc = "TRANS-GLOBAL-CALC";
    case CampaignProcessing = "CAMPAIGN_PROCESSING";
    case ListExport = "LIST_EXPORT";
    case ContactExport = "CONTACT_EXPORT";
}
