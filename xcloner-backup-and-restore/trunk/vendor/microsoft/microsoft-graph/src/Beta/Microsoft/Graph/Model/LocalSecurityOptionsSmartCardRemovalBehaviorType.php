<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* LocalSecurityOptionsSmartCardRemovalBehaviorType File
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
* LocalSecurityOptionsSmartCardRemovalBehaviorType class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class LocalSecurityOptionsSmartCardRemovalBehaviorType extends Enum
{
    /**
    * The Enum LocalSecurityOptionsSmartCardRemovalBehaviorType
    */
    const NO_ACTION = "noAction";
    const LOCK_WORKSTATION = "lockWorkstation";
    const FORCE_LOGOFF = "forceLogoff";
    const DISCONNECT_REMOTE_DESKTOP_SESSION = "disconnectRemoteDesktopSession";
}
