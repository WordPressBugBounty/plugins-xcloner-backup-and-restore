<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WindowsDefenderScanActionResult File
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

/**
* WindowsDefenderScanActionResult class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class WindowsDefenderScanActionResult extends DeviceActionResult
{
    /**
    * Gets the scanType
    * Scan type either full scan or quick scan
    *
    * @return string|null The scanType
    */
    public function getScanType()
    {
        if (array_key_exists("scanType", $this->_propDict)) {
            return $this->_propDict["scanType"];
        } else {
            return null;
        }
    }

    /**
    * Sets the scanType
    * Scan type either full scan or quick scan
    *
    * @param string $val The value of the scanType
    *
    * @return WindowsDefenderScanActionResult
    */
    public function setScanType($val)
    {
        $this->_propDict["scanType"] = $val;
        return $this;
    }
}
