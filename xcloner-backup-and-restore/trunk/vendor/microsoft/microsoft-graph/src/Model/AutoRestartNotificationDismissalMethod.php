<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AutoRestartNotificationDismissalMethod File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Microsoft\Graph\Model;

if (!defined('ABSPATH') && PHP_SAPI !== 'cli') { die(); }


use Microsoft\Graph\Core\Enum;

/**
* AutoRestartNotificationDismissalMethod class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AutoRestartNotificationDismissalMethod extends Enum
{
    /**
    * The Enum AutoRestartNotificationDismissalMethod
    */
    const NOT_CONFIGURED = "notConfigured";
    const AUTOMATIC = "automatic";
    const USER = "user";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
