<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceLicensingStatus File
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
* DeviceLicensingStatus class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DeviceLicensingStatus extends Enum
{
    /**
    * The Enum DeviceLicensingStatus
    */
    const UNKNOWN = "unknown";
    const LICENSE_REFRESH_STARTED = "licenseRefreshStarted";
    const LICENSE_REFRESH_PENDING = "licenseRefreshPending";
    const DEVICE_IS_NOT_AZURE_ACTIVE_DIRECTORY_JOINED = "deviceIsNotAzureActiveDirectoryJoined";
    const VERIFYING_MICROSOFT_DEVICE_IDENTITY = "verifyingMicrosoftDeviceIdentity";
    const DEVICE_IDENTITY_VERIFICATION_FAILED = "deviceIdentityVerificationFailed";
    const VERIFYING_MIROSOFT_ACCOUNT_IDENTITY = "verifyingMirosoftAccountIdentity";
    const MIROSOFT_ACCOUNT_VERIFICATION_FAILED = "mirosoftAccountVerificationFailed";
    const ACQUIRING_DEVICE_LICENSE = "acquiringDeviceLicense";
    const REFRESHING_DEVICE_LICENSE = "refreshingDeviceLicense";
    const DEVICE_LICENSE_REFRESH_SUCCEED = "deviceLicenseRefreshSucceed";
    const DEVICE_LICENSE_REFRESH_FAILED = "deviceLicenseRefreshFailed";
    const REMOVING_DEVICE_LICENSE = "removingDeviceLicense";
    const DEVICE_LICENSE_REMOVE_SUCCEED = "deviceLicenseRemoveSucceed";
    const DEVICE_LICENSE_REMOVE_FAILED = "deviceLicenseRemoveFailed";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
