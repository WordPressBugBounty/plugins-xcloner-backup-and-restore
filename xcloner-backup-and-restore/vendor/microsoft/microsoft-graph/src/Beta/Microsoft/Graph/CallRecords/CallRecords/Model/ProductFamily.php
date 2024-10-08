<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ProductFamily File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\CallRecords\Model;

if (!defined('ABSPATH') && PHP_SAPI !== 'cli') { die(); }


use Microsoft\Graph\Core\Enum;

/**
* ProductFamily class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ProductFamily extends Enum
{
    /**
    * The Enum ProductFamily
    */
    const UNKNOWN = "unknown";
    const TEAMS = "teams";
    const SKYPE_FOR_BUSINESS = "skypeForBusiness";
    const LYNC = "lync";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
    const AZURE_COMMUNICATION_SERVICES = "azureCommunicationServices";
}
