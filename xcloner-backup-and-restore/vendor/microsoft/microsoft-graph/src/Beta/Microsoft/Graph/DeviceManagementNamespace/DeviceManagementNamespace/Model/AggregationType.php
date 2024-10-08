<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AggregationType File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\DeviceManagementNamespace\Model;

if (!defined('ABSPATH') && PHP_SAPI !== 'cli') { die(); }


use Microsoft\Graph\Core\Enum;

/**
* AggregationType class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AggregationType extends Enum
{
    /**
    * The Enum AggregationType
    */
    const COUNT = "count";
    const PERCENTAGE = "percentage";
    const AFFECTED_CLOUD_PC_COUNT = "affectedCloudPcCount";
    const AFFECTED_CLOUD_PC_PERCENTAGE = "affectedCloudPcPercentage";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
