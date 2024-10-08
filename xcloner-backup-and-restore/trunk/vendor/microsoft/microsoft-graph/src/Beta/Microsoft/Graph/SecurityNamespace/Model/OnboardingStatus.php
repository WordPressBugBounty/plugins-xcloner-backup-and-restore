<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* OnboardingStatus File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\SecurityNamespace\Model;

if (!defined('ABSPATH') && PHP_SAPI !== 'cli') { die(); }


use Microsoft\Graph\Core\Enum;

/**
* OnboardingStatus class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class OnboardingStatus extends Enum
{
    /**
    * The Enum OnboardingStatus
    */
    const INSUFFICIENT_INFO = "insufficientInfo";
    const ONBOARDED = "onboarded";
    const CAN_BE_ONBOARDED = "canBeOnboarded";
    const UNSUPPORTED = "unsupported";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
