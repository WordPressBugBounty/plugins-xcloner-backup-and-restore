<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AndroidDeviceOwnerRequiredPasswordUnlock File
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
* AndroidDeviceOwnerRequiredPasswordUnlock class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AndroidDeviceOwnerRequiredPasswordUnlock extends Enum
{
    /**
    * The Enum AndroidDeviceOwnerRequiredPasswordUnlock
    */
    const DEVICE_DEFAULT = "deviceDefault";
    const DAILY = "daily";
    const UNKOWN_FUTURE_VALUE = "unkownFutureValue";
}