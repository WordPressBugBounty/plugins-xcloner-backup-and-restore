<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ScheduleChangeRequest File
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
* ScheduleChangeRequest class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ScheduleChangeRequest extends ChangeTrackedEntity
{
    /**
    * Gets the assignedTo
    *
    * @return ScheduleChangeRequestActor|null The assignedTo
    */
    public function getAssignedTo()
    {
        if (array_key_exists("assignedTo", $this->_propDict)) {
            if (is_a($this->_propDict["assignedTo"], "\Microsoft\Graph\Model\ScheduleChangeRequestActor") || is_null($this->_propDict["assignedTo"])) {
                return $this->_propDict["assignedTo"];
            } else {
                $this->_propDict["assignedTo"] = new ScheduleChangeRequestActor($this->_propDict["assignedTo"]);
                return $this->_propDict["assignedTo"];
            }
        }
        return null;
    }

    /**
    * Sets the assignedTo
    *
    * @param ScheduleChangeRequestActor $val The assignedTo
    *
    * @return ScheduleChangeRequest
    */
    public function setAssignedTo($val)
    {
        $this->_propDict["assignedTo"] = $val;
        return $this;
    }

    /**
    * Gets the managerActionDateTime
    *
    * @return \DateTime|null The managerActionDateTime
    */
    public function getManagerActionDateTime()
    {
        if (array_key_exists("managerActionDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["managerActionDateTime"], "\DateTime") || is_null($this->_propDict["managerActionDateTime"])) {
                return $this->_propDict["managerActionDateTime"];
            } else {
                $this->_propDict["managerActionDateTime"] = new \DateTime($this->_propDict["managerActionDateTime"]);
                return $this->_propDict["managerActionDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the managerActionDateTime
    *
    * @param \DateTime $val The managerActionDateTime
    *
    * @return ScheduleChangeRequest
    */
    public function setManagerActionDateTime($val)
    {
        $this->_propDict["managerActionDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the managerActionMessage
    *
    * @return string|null The managerActionMessage
    */
    public function getManagerActionMessage()
    {
        if (array_key_exists("managerActionMessage", $this->_propDict)) {
            return $this->_propDict["managerActionMessage"];
        } else {
            return null;
        }
    }

    /**
    * Sets the managerActionMessage
    *
    * @param string $val The managerActionMessage
    *
    * @return ScheduleChangeRequest
    */
    public function setManagerActionMessage($val)
    {
        $this->_propDict["managerActionMessage"] = $val;
        return $this;
    }

    /**
    * Gets the managerUserId
    *
    * @return string|null The managerUserId
    */
    public function getManagerUserId()
    {
        if (array_key_exists("managerUserId", $this->_propDict)) {
            return $this->_propDict["managerUserId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the managerUserId
    *
    * @param string $val The managerUserId
    *
    * @return ScheduleChangeRequest
    */
    public function setManagerUserId($val)
    {
        $this->_propDict["managerUserId"] = $val;
        return $this;
    }

    /**
    * Gets the senderDateTime
    *
    * @return \DateTime|null The senderDateTime
    */
    public function getSenderDateTime()
    {
        if (array_key_exists("senderDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["senderDateTime"], "\DateTime") || is_null($this->_propDict["senderDateTime"])) {
                return $this->_propDict["senderDateTime"];
            } else {
                $this->_propDict["senderDateTime"] = new \DateTime($this->_propDict["senderDateTime"]);
                return $this->_propDict["senderDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the senderDateTime
    *
    * @param \DateTime $val The senderDateTime
    *
    * @return ScheduleChangeRequest
    */
    public function setSenderDateTime($val)
    {
        $this->_propDict["senderDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the senderMessage
    *
    * @return string|null The senderMessage
    */
    public function getSenderMessage()
    {
        if (array_key_exists("senderMessage", $this->_propDict)) {
            return $this->_propDict["senderMessage"];
        } else {
            return null;
        }
    }

    /**
    * Sets the senderMessage
    *
    * @param string $val The senderMessage
    *
    * @return ScheduleChangeRequest
    */
    public function setSenderMessage($val)
    {
        $this->_propDict["senderMessage"] = $val;
        return $this;
    }

    /**
    * Gets the senderUserId
    *
    * @return string|null The senderUserId
    */
    public function getSenderUserId()
    {
        if (array_key_exists("senderUserId", $this->_propDict)) {
            return $this->_propDict["senderUserId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the senderUserId
    *
    * @param string $val The senderUserId
    *
    * @return ScheduleChangeRequest
    */
    public function setSenderUserId($val)
    {
        $this->_propDict["senderUserId"] = $val;
        return $this;
    }

    /**
    * Gets the state
    *
    * @return ScheduleChangeState|null The state
    */
    public function getState()
    {
        if (array_key_exists("state", $this->_propDict)) {
            if (is_a($this->_propDict["state"], "\Microsoft\Graph\Model\ScheduleChangeState") || is_null($this->_propDict["state"])) {
                return $this->_propDict["state"];
            } else {
                $this->_propDict["state"] = new ScheduleChangeState($this->_propDict["state"]);
                return $this->_propDict["state"];
            }
        }
        return null;
    }

    /**
    * Sets the state
    *
    * @param ScheduleChangeState $val The state
    *
    * @return ScheduleChangeRequest
    */
    public function setState($val)
    {
        $this->_propDict["state"] = $val;
        return $this;
    }

}
