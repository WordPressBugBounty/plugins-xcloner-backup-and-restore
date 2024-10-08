<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* BroadcastMeetingSettings File
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
* BroadcastMeetingSettings class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class BroadcastMeetingSettings extends Entity
{

    /**
    * Gets the allowedAudience
    * Defines who can join the Teams live event. Possible values are listed in the following table.
    *
    * @return BroadcastMeetingAudience|null The allowedAudience
    */
    public function getAllowedAudience()
    {
        if (array_key_exists("allowedAudience", $this->_propDict)) {
            if (is_a($this->_propDict["allowedAudience"], "\Microsoft\Graph\Model\BroadcastMeetingAudience") || is_null($this->_propDict["allowedAudience"])) {
                return $this->_propDict["allowedAudience"];
            } else {
                $this->_propDict["allowedAudience"] = new BroadcastMeetingAudience($this->_propDict["allowedAudience"]);
                return $this->_propDict["allowedAudience"];
            }
        }
        return null;
    }

    /**
    * Sets the allowedAudience
    * Defines who can join the Teams live event. Possible values are listed in the following table.
    *
    * @param BroadcastMeetingAudience $val The value to assign to the allowedAudience
    *
    * @return BroadcastMeetingSettings The BroadcastMeetingSettings
    */
    public function setAllowedAudience($val)
    {
        $this->_propDict["allowedAudience"] = $val;
         return $this;
    }

    /**
    * Gets the captions
    * Caption settings of a Teams live event.
    *
    * @return BroadcastMeetingCaptionSettings|null The captions
    */
    public function getCaptions()
    {
        if (array_key_exists("captions", $this->_propDict)) {
            if (is_a($this->_propDict["captions"], "\Microsoft\Graph\Model\BroadcastMeetingCaptionSettings") || is_null($this->_propDict["captions"])) {
                return $this->_propDict["captions"];
            } else {
                $this->_propDict["captions"] = new BroadcastMeetingCaptionSettings($this->_propDict["captions"]);
                return $this->_propDict["captions"];
            }
        }
        return null;
    }

    /**
    * Sets the captions
    * Caption settings of a Teams live event.
    *
    * @param BroadcastMeetingCaptionSettings $val The value to assign to the captions
    *
    * @return BroadcastMeetingSettings The BroadcastMeetingSettings
    */
    public function setCaptions($val)
    {
        $this->_propDict["captions"] = $val;
         return $this;
    }
    /**
    * Gets the isAttendeeReportEnabled
    * Indicates whether attendee report is enabled for this Teams live event. Default value is false.
    *
    * @return bool|null The isAttendeeReportEnabled
    */
    public function getIsAttendeeReportEnabled()
    {
        if (array_key_exists("isAttendeeReportEnabled", $this->_propDict)) {
            return $this->_propDict["isAttendeeReportEnabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isAttendeeReportEnabled
    * Indicates whether attendee report is enabled for this Teams live event. Default value is false.
    *
    * @param bool $val The value of the isAttendeeReportEnabled
    *
    * @return BroadcastMeetingSettings
    */
    public function setIsAttendeeReportEnabled($val)
    {
        $this->_propDict["isAttendeeReportEnabled"] = $val;
        return $this;
    }
    /**
    * Gets the isQuestionAndAnswerEnabled
    * Indicates whether Q&amp;A is enabled for this Teams live event. Default value is false.
    *
    * @return bool|null The isQuestionAndAnswerEnabled
    */
    public function getIsQuestionAndAnswerEnabled()
    {
        if (array_key_exists("isQuestionAndAnswerEnabled", $this->_propDict)) {
            return $this->_propDict["isQuestionAndAnswerEnabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isQuestionAndAnswerEnabled
    * Indicates whether Q&amp;A is enabled for this Teams live event. Default value is false.
    *
    * @param bool $val The value of the isQuestionAndAnswerEnabled
    *
    * @return BroadcastMeetingSettings
    */
    public function setIsQuestionAndAnswerEnabled($val)
    {
        $this->_propDict["isQuestionAndAnswerEnabled"] = $val;
        return $this;
    }
    /**
    * Gets the isRecordingEnabled
    * Indicates whether recording is enabled for this Teams live event. Default value is false.
    *
    * @return bool|null The isRecordingEnabled
    */
    public function getIsRecordingEnabled()
    {
        if (array_key_exists("isRecordingEnabled", $this->_propDict)) {
            return $this->_propDict["isRecordingEnabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isRecordingEnabled
    * Indicates whether recording is enabled for this Teams live event. Default value is false.
    *
    * @param bool $val The value of the isRecordingEnabled
    *
    * @return BroadcastMeetingSettings
    */
    public function setIsRecordingEnabled($val)
    {
        $this->_propDict["isRecordingEnabled"] = $val;
        return $this;
    }
    /**
    * Gets the isVideoOnDemandEnabled
    * Indicates whether video on demand is enabled for this Teams live event. Default value is false.
    *
    * @return bool|null The isVideoOnDemandEnabled
    */
    public function getIsVideoOnDemandEnabled()
    {
        if (array_key_exists("isVideoOnDemandEnabled", $this->_propDict)) {
            return $this->_propDict["isVideoOnDemandEnabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isVideoOnDemandEnabled
    * Indicates whether video on demand is enabled for this Teams live event. Default value is false.
    *
    * @param bool $val The value of the isVideoOnDemandEnabled
    *
    * @return BroadcastMeetingSettings
    */
    public function setIsVideoOnDemandEnabled($val)
    {
        $this->_propDict["isVideoOnDemandEnabled"] = $val;
        return $this;
    }
}
