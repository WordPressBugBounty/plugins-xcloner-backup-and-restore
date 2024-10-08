<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* MacOSSoftwareUpdateBehavior File
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
* MacOSSoftwareUpdateBehavior class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class MacOSSoftwareUpdateBehavior extends Enum
{
    /**
    * The Enum MacOSSoftwareUpdateBehavior
    */
    const NOT_CONFIGURED = "notConfigured";
    const GRAPHDEFAULT = "default";
    const DOWNLOAD_ONLY = "downloadOnly";
    const INSTALL_ASAP = "installASAP";
    const NOTIFY_ONLY = "notifyOnly";
    const INSTALL_LATER = "installLater";
}
