<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* MeetingParticipants File
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

/**
* MeetingParticipants class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class MeetingParticipants extends Entity
{

    /**
    * Gets the attendees
    *
    * @return MeetingParticipantInfo|null The attendees
    */
    public function getAttendees()
    {
        if (array_key_exists("attendees", $this->_propDict)) {
            if (is_a($this->_propDict["attendees"], "\Microsoft\Graph\Model\MeetingParticipantInfo") || is_null($this->_propDict["attendees"])) {
                return $this->_propDict["attendees"];
            } else {
                $this->_propDict["attendees"] = new MeetingParticipantInfo($this->_propDict["attendees"]);
                return $this->_propDict["attendees"];
            }
        }
        return null;
    }

    /**
    * Sets the attendees
    *
    * @param MeetingParticipantInfo $val The value to assign to the attendees
    *
    * @return MeetingParticipants The MeetingParticipants
    */
    public function setAttendees($val)
    {
        $this->_propDict["attendees"] = $val;
         return $this;
    }

    /**
    * Gets the organizer
    *
    * @return MeetingParticipantInfo|null The organizer
    */
    public function getOrganizer()
    {
        if (array_key_exists("organizer", $this->_propDict)) {
            if (is_a($this->_propDict["organizer"], "\Microsoft\Graph\Model\MeetingParticipantInfo") || is_null($this->_propDict["organizer"])) {
                return $this->_propDict["organizer"];
            } else {
                $this->_propDict["organizer"] = new MeetingParticipantInfo($this->_propDict["organizer"]);
                return $this->_propDict["organizer"];
            }
        }
        return null;
    }

    /**
    * Sets the organizer
    *
    * @param MeetingParticipantInfo $val The value to assign to the organizer
    *
    * @return MeetingParticipants The MeetingParticipants
    */
    public function setOrganizer($val)
    {
        $this->_propDict["organizer"] = $val;
         return $this;
    }
}
