<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceManagementConfigurationPlatforms File
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
* DeviceManagementConfigurationPlatforms class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DeviceManagementConfigurationPlatforms extends Enum
{
    /**
    * The Enum DeviceManagementConfigurationPlatforms
    */
    const NONE = "none";
    const ANDROID = "android";
    const I_OS = "iOS";
    const MAC_OS = "macOS";
    const WINDOWS10_X = "windows10X";
    const WINDOWS10 = "windows10";
    const LINUX = "linux";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
