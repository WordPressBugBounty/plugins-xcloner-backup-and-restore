<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* EnrollmentNotificationBrandingOptions File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\Model;

if (!defined('ABSPATH') && PHP_SAPI !== 'cli') { die(); }


use Microsoft\Graph\Core\Enum;

/**
* EnrollmentNotificationBrandingOptions class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class EnrollmentNotificationBrandingOptions extends Enum
{
    /**
    * The Enum EnrollmentNotificationBrandingOptions
    */
    const NONE = "none";
    const INCLUDE_COMPANY_LOGO = "includeCompanyLogo";
    const INCLUDE_COMPANY_NAME = "includeCompanyName";
    const INCLUDE_CONTACT_INFORMATION = "includeContactInformation";
    const INCLUDE_COMPANY_PORTAL_LINK = "includeCompanyPortalLink";
    const INCLUDE_DEVICE_DETAILS = "includeDeviceDetails";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
