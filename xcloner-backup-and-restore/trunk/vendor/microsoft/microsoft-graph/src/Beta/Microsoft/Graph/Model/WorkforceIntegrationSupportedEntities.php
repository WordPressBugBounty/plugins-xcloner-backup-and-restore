<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WorkforceIntegrationSupportedEntities File
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
* WorkforceIntegrationSupportedEntities class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class WorkforceIntegrationSupportedEntities extends Enum
{
    /**
    * The Enum WorkforceIntegrationSupportedEntities
    */
    const NONE = "none";
    const SHIFT = "shift";
    const SWAP_REQUEST = "swapRequest";
    const USER_SHIFT_PREFERENCES = "userShiftPreferences";
    const OPEN_SHIFT = "openShift";
    const OPEN_SHIFT_REQUEST = "openShiftRequest";
    const OFFER_SHIFT_REQUEST = "offerShiftRequest";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
    const TIME_CARD = "timeCard";
    const TIME_OFF_REASON = "timeOffReason";
    const TIME_OFF = "timeOff";
    const TIME_OFF_REQUEST = "timeOffRequest";
}
