<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WarrantyType File
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
* WarrantyType class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class WarrantyType extends Enum
{
    /**
    * The Enum WarrantyType
    */
    const UNKNOWN = "unknown";
    const MANUFACTURER = "manufacturer";
    const CONTRACTUAL = "contractual";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
