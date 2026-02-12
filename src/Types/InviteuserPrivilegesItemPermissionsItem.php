<?php

namespace Brevo\Types;

enum InviteuserPrivilegesItemPermissionsItem: string
{
    case CreateEditDelete = "create_edit_delete";
    case SendScheduleSuspend = "send_schedule_suspend";
    case View = "view";
    case Import = "import";
    case Export = "export";
    case ListAndAttributes = "list_and_attributes";
    case Forms = "forms";
    case ActivateDeactivate = "activate_deactivate";
    case ActivateDeactivatePause = "activate_deactivate_pause";
    case Settings = "settings";
    case SchedulePause = "schedule_pause";
    case All = "all";
    case Logs = "logs";
    case Access = "access";
    case Assign = "assign";
    case Configure = "configure";
    case CreateEditDeals = "create_edit_deals";
    case DeleteDeals = "delete_deals";
    case ManageOthersDealsTasks = "manage_others_deals_tasks";
    case ManageOwnedCompanies = "manage_owned_companies";
    case ManageOthersCompanies = "manage_others_companies";
    case Reports = "reports";
    case SendersManagement = "senders_management";
    case DomainsManagement = "domains_management";
    case DedicatedIpsManagement = "dedicated_ips_management";
    case Send = "send";
    case Smtp = "smtp";
    case ApiKeys = "api_keys";
    case AuthorizedIps = "authorized_ips";
    case None = "none";
}
