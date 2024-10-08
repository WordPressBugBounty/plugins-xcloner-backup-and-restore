<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* TargetedManagedAppGroupType File
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
* TargetedManagedAppGroupType class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class TargetedManagedAppGroupType extends Enum
{
    /**
    * The Enum TargetedManagedAppGroupType
    */
    const SELECTED_PUBLIC_APPS = "selectedPublicApps";
    const ALL_CORE_MICROSOFT_APPS = "allCoreMicrosoftApps";
    const ALL_MICROSOFT_APPS = "allMicrosoftApps";
    const ALL_APPS = "allApps";
}
