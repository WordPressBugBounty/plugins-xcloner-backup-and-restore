<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* TimeClockSettings File
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
* TimeClockSettings class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class TimeClockSettings extends Entity
{

    /**
    * Gets the approvedLocation
    * The aprroved location of the timeClock.
    *
    * @return GeoCoordinates|null The approvedLocation
    */
    public function getApprovedLocation()
    {
        if (array_key_exists("approvedLocation", $this->_propDict)) {
            if (is_a($this->_propDict["approvedLocation"], "\Beta\Microsoft\Graph\Model\GeoCoordinates") || is_null($this->_propDict["approvedLocation"])) {
                return $this->_propDict["approvedLocation"];
            } else {
                $this->_propDict["approvedLocation"] = new GeoCoordinates($this->_propDict["approvedLocation"]);
                return $this->_propDict["approvedLocation"];
            }
        }
        return null;
    }

    /**
    * Sets the approvedLocation
    * The aprroved location of the timeClock.
    *
    * @param GeoCoordinates $val The value to assign to the approvedLocation
    *
    * @return TimeClockSettings The TimeClockSettings
    */
    public function setApprovedLocation($val)
    {
        $this->_propDict["approvedLocation"] = $val;
         return $this;
    }
}
