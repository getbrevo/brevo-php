<?php

namespace Brevo\Ecommerce\Types;

enum GetEcommerceAttributionMetricsConversionSourceConversionSourceIdResponseConversionSource: string
{
    case EmailCampaign = "email_campaign";
    case SmsCampaign = "sms_campaign";
    case AutomationWorkflowEmail = "automation_workflow_email";
    case AutomationWorkflowSms = "automation_workflow_sms";
}
