<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Win32LobAppPowerShellScriptRuleOperationType File
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
* Win32LobAppPowerShellScriptRuleOperationType class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class Win32LobAppPowerShellScriptRuleOperationType extends Enum
{
    /**
    * The Enum Win32LobAppPowerShellScriptRuleOperationType
    */
    const NOT_CONFIGURED = "notConfigured";
    const GRAPHSTRING = "string";
    const DATE_TIME = "dateTime";
    const INTEGER = "integer";
    const GRAPHFLOAT = "float";
    const VERSION = "version";
    const BOOLEAN = "boolean";
}
