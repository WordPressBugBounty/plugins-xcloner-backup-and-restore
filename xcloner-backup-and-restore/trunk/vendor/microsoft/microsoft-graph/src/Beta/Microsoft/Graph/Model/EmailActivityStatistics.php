<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* EmailActivityStatistics File
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
* EmailActivityStatistics class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class EmailActivityStatistics extends ActivityStatistics
{
    /**
    * Gets the afterHours
    * Total hours spent on email outside of working hours, which is based on the user's Outlook calendar setting for work hours. The value is represented in ISO 8601 format for durations.
    *
    * @return \DateInterval|null The afterHours
    */
    public function getAfterHours()
    {
        if (array_key_exists("afterHours", $this->_propDict)) {
            if (is_a($this->_propDict["afterHours"], "\DateInterval") || is_null($this->_propDict["afterHours"])) {
                return $this->_propDict["afterHours"];
            } else {
                $this->_propDict["afterHours"] = new \DateInterval($this->_propDict["afterHours"]);
                return $this->_propDict["afterHours"];
            }
        }
        return null;
    }

    /**
    * Sets the afterHours
    * Total hours spent on email outside of working hours, which is based on the user's Outlook calendar setting for work hours. The value is represented in ISO 8601 format for durations.
    *
    * @param \DateInterval $val The afterHours
    *
    * @return EmailActivityStatistics
    */
    public function setAfterHours($val)
    {
        $this->_propDict["afterHours"] = $val;
        return $this;
    }

    /**
    * Gets the readEmail
    * Total hours spent reading email. The value is represented in ISO 8601 format for durations.
    *
    * @return \DateInterval|null The readEmail
    */
    public function getReadEmail()
    {
        if (array_key_exists("readEmail", $this->_propDict)) {
            if (is_a($this->_propDict["readEmail"], "\DateInterval") || is_null($this->_propDict["readEmail"])) {
                return $this->_propDict["readEmail"];
            } else {
                $this->_propDict["readEmail"] = new \DateInterval($this->_propDict["readEmail"]);
                return $this->_propDict["readEmail"];
            }
        }
        return null;
    }

    /**
    * Sets the readEmail
    * Total hours spent reading email. The value is represented in ISO 8601 format for durations.
    *
    * @param \DateInterval $val The readEmail
    *
    * @return EmailActivityStatistics
    */
    public function setReadEmail($val)
    {
        $this->_propDict["readEmail"] = $val;
        return $this;
    }

    /**
    * Gets the sentEmail
    * Total hours spent writing and sending email. The value is represented in ISO 8601 format for durations.
    *
    * @return \DateInterval|null The sentEmail
    */
    public function getSentEmail()
    {
        if (array_key_exists("sentEmail", $this->_propDict)) {
            if (is_a($this->_propDict["sentEmail"], "\DateInterval") || is_null($this->_propDict["sentEmail"])) {
                return $this->_propDict["sentEmail"];
            } else {
                $this->_propDict["sentEmail"] = new \DateInterval($this->_propDict["sentEmail"]);
                return $this->_propDict["sentEmail"];
            }
        }
        return null;
    }

    /**
    * Sets the sentEmail
    * Total hours spent writing and sending email. The value is represented in ISO 8601 format for durations.
    *
    * @param \DateInterval $val The sentEmail
    *
    * @return EmailActivityStatistics
    */
    public function setSentEmail($val)
    {
        $this->_propDict["sentEmail"] = $val;
        return $this;
    }

}
