<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* TimeCardEvent File
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
* TimeCardEvent class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class TimeCardEvent extends Entity
{
    /**
    * Gets the atApprovedLocation
    * Indicates whether the entry was recorded at the approved location.
    *
    * @return bool|null The atApprovedLocation
    */
    public function getAtApprovedLocation()
    {
        if (array_key_exists("atApprovedLocation", $this->_propDict)) {
            return $this->_propDict["atApprovedLocation"];
        } else {
            return null;
        }
    }

    /**
    * Sets the atApprovedLocation
    * Indicates whether the entry was recorded at the approved location.
    *
    * @param bool $val The value of the atApprovedLocation
    *
    * @return TimeCardEvent
    */
    public function setAtApprovedLocation($val)
    {
        $this->_propDict["atApprovedLocation"] = $val;
        return $this;
    }

    /**
    * Gets the dateTime
    * The time the entry is recorded.
    *
    * @return \DateTime|null The dateTime
    */
    public function getDateTime()
    {
        if (array_key_exists("dateTime", $this->_propDict)) {
            if (is_a($this->_propDict["dateTime"], "\DateTime") || is_null($this->_propDict["dateTime"])) {
                return $this->_propDict["dateTime"];
            } else {
                $this->_propDict["dateTime"] = new \DateTime($this->_propDict["dateTime"]);
                return $this->_propDict["dateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the dateTime
    * The time the entry is recorded.
    *
    * @param \DateTime $val The value to assign to the dateTime
    *
    * @return TimeCardEvent The TimeCardEvent
    */
    public function setDateTime($val)
    {
        $this->_propDict["dateTime"] = $val;
         return $this;
    }

    /**
    * Gets the notes
    * Notes about the timeCardEvent.
    *
    * @return ItemBody|null The notes
    */
    public function getNotes()
    {
        if (array_key_exists("notes", $this->_propDict)) {
            if (is_a($this->_propDict["notes"], "\Beta\Microsoft\Graph\Model\ItemBody") || is_null($this->_propDict["notes"])) {
                return $this->_propDict["notes"];
            } else {
                $this->_propDict["notes"] = new ItemBody($this->_propDict["notes"]);
                return $this->_propDict["notes"];
            }
        }
        return null;
    }

    /**
    * Sets the notes
    * Notes about the timeCardEvent.
    *
    * @param ItemBody $val The value to assign to the notes
    *
    * @return TimeCardEvent The TimeCardEvent
    */
    public function setNotes($val)
    {
        $this->_propDict["notes"] = $val;
         return $this;
    }
}
