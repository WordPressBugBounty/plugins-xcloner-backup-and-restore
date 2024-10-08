<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* LobbyBypassScope File
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
* LobbyBypassScope class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class LobbyBypassScope extends Enum
{
    /**
    * The Enum LobbyBypassScope
    */
    const ORGANIZER = "organizer";
    const ORGANIZATION = "organization";
    const ORGANIZATION_AND_FEDERATED = "organizationAndFederated";
    const EVERYONE = "everyone";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
    const INVITED = "invited";
    const ORGANIZATION_EXCLUDING_GUESTS = "organizationExcludingGuests";
}
