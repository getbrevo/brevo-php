<?php

namespace Brevo\Types;

enum NotFoundErrorBodyCode: string
{
    case InvalidParameter = "invalid_parameter";
    case MissingParameter = "missing_parameter";
    case OutOfRange = "out_of_range";
    case CampaignProcessing = "campaign_processing";
    case CampaignSent = "campaign_sent";
    case DocumentNotFound = "document_not_found";
    case NotEnoughCredits = "not_enough_credits";
    case PermissionDenied = "permission_denied";
    case DuplicateParameter = "duplicate_parameter";
    case DuplicateRequest = "duplicate_request";
    case MethodNotAllowed = "method_not_allowed";
    case Unauthorized = "unauthorized";
    case AccountUnderValidation = "account_under_validation";
    case NotAcceptable = "not_acceptable";
    case BadRequest = "bad_request";
    case UnprocessableEntity = "unprocessable_entity";
    case DomainDoesNotExist = "Domain does not exist";
    case ContactEmailNotFound = "Contact email not found";
    case AttributeNotFound = "Attribute not found";
    case CategoryIdNotFound = "Category id not found";
    case InvalidParametersPassed = "Invalid parameters passed";
    case RecordSForIdentifierNotFound = "Record(s) for identifier not found";
    case ReturnedWhenQueryParamsAreInvalid = "Returned when query params are invalid";
    case ReturnedWhenInvalidDataPosted = "Returned when invalid data posted";
    case FeedNotFound = "Feed not found";
    case CampaignIdNotFound = "Campaign ID not found";
    case ApiKeyNotFound = "api-key not found";
    case DmarcPolicyRequiresDomainAuthentication = "DMARC policy requires domain authentication";
    case DnsRecordsNotProperlyConfigured = "DNS records not properly configured";
    case InvalidOtpCodeProvided = "Invalid OTP code provided";
    case OtpCodeHasExpired = "OTP code has expired";
    case DomainAlreadyExistsInYourAccount = "Domain already exists in your account";
    case TheSumOfAllIpWeightsMustEqual100 = "The sum of all IP weights must equal 100";
    case AuthenticationFailed = "Authentication failed";
    case InsufficientCredits = "Insufficient credits";
    case RequestAlreadyProcessed = "Request already processed";
}
