<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AudioConferencing File
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
* AudioConferencing class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AudioConferencing extends Entity
{
    /**
    * Gets the conferenceId
    * The conference id of the online meeting.
    *
    * @return string|null The conferenceId
    */
    public function getConferenceId()
    {
        if (array_key_exists("conferenceId", $this->_propDict)) {
            return $this->_propDict["conferenceId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the conferenceId
    * The conference id of the online meeting.
    *
    * @param string $val The value of the conferenceId
    *
    * @return AudioConferencing
    */
    public function setConferenceId($val)
    {
        $this->_propDict["conferenceId"] = $val;
        return $this;
    }
    /**
    * Gets the dialinUrl
    * A URL to the externally-accessible web page that contains dial-in information.
    *
    * @return string|null The dialinUrl
    */
    public function getDialinUrl()
    {
        if (array_key_exists("dialinUrl", $this->_propDict)) {
            return $this->_propDict["dialinUrl"];
        } else {
            return null;
        }
    }

    /**
    * Sets the dialinUrl
    * A URL to the externally-accessible web page that contains dial-in information.
    *
    * @param string $val The value of the dialinUrl
    *
    * @return AudioConferencing
    */
    public function setDialinUrl($val)
    {
        $this->_propDict["dialinUrl"] = $val;
        return $this;
    }
    /**
    * Gets the tollFreeNumber
    *
    * @return string|null The tollFreeNumber
    */
    public function getTollFreeNumber()
    {
        if (array_key_exists("tollFreeNumber", $this->_propDict)) {
            return $this->_propDict["tollFreeNumber"];
        } else {
            return null;
        }
    }

    /**
    * Sets the tollFreeNumber
    *
    * @param string $val The value of the tollFreeNumber
    *
    * @return AudioConferencing
    */
    public function setTollFreeNumber($val)
    {
        $this->_propDict["tollFreeNumber"] = $val;
        return $this;
    }
    /**
    * Gets the tollFreeNumbers
    * List of toll-free numbers that are displayed in the meeting invite.
    *
    * @return string|null The tollFreeNumbers
    */
    public function getTollFreeNumbers()
    {
        if (array_key_exists("tollFreeNumbers", $this->_propDict)) {
            return $this->_propDict["tollFreeNumbers"];
        } else {
            return null;
        }
    }

    /**
    * Sets the tollFreeNumbers
    * List of toll-free numbers that are displayed in the meeting invite.
    *
    * @param string $val The value of the tollFreeNumbers
    *
    * @return AudioConferencing
    */
    public function setTollFreeNumbers($val)
    {
        $this->_propDict["tollFreeNumbers"] = $val;
        return $this;
    }
    /**
    * Gets the tollNumber
    *
    * @return string|null The tollNumber
    */
    public function getTollNumber()
    {
        if (array_key_exists("tollNumber", $this->_propDict)) {
            return $this->_propDict["tollNumber"];
        } else {
            return null;
        }
    }

    /**
    * Sets the tollNumber
    *
    * @param string $val The value of the tollNumber
    *
    * @return AudioConferencing
    */
    public function setTollNumber($val)
    {
        $this->_propDict["tollNumber"] = $val;
        return $this;
    }
    /**
    * Gets the tollNumbers
    * List of toll numbers that are displayed in the meeting invite.
    *
    * @return string|null The tollNumbers
    */
    public function getTollNumbers()
    {
        if (array_key_exists("tollNumbers", $this->_propDict)) {
            return $this->_propDict["tollNumbers"];
        } else {
            return null;
        }
    }

    /**
    * Sets the tollNumbers
    * List of toll numbers that are displayed in the meeting invite.
    *
    * @param string $val The value of the tollNumbers
    *
    * @return AudioConferencing
    */
    public function setTollNumbers($val)
    {
        $this->_propDict["tollNumbers"] = $val;
        return $this;
    }
}
