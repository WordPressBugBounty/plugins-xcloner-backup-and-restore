<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PrivilegedApproval File
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
* PrivilegedApproval class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class PrivilegedApproval extends Entity
{
    /**
    * Gets the approvalDuration
    *
    * @return \DateInterval|null The approvalDuration
    */
    public function getApprovalDuration()
    {
        if (array_key_exists("approvalDuration", $this->_propDict)) {
            if (is_a($this->_propDict["approvalDuration"], "\DateInterval") || is_null($this->_propDict["approvalDuration"])) {
                return $this->_propDict["approvalDuration"];
            } else {
                $this->_propDict["approvalDuration"] = new \DateInterval($this->_propDict["approvalDuration"]);
                return $this->_propDict["approvalDuration"];
            }
        }
        return null;
    }

    /**
    * Sets the approvalDuration
    *
    * @param \DateInterval $val The approvalDuration
    *
    * @return PrivilegedApproval
    */
    public function setApprovalDuration($val)
    {
        $this->_propDict["approvalDuration"] = $val;
        return $this;
    }

    /**
    * Gets the approvalState
    * Possible values are: pending, approved, denied, aborted, canceled.
    *
    * @return ApprovalState|null The approvalState
    */
    public function getApprovalState()
    {
        if (array_key_exists("approvalState", $this->_propDict)) {
            if (is_a($this->_propDict["approvalState"], "\Beta\Microsoft\Graph\Model\ApprovalState") || is_null($this->_propDict["approvalState"])) {
                return $this->_propDict["approvalState"];
            } else {
                $this->_propDict["approvalState"] = new ApprovalState($this->_propDict["approvalState"]);
                return $this->_propDict["approvalState"];
            }
        }
        return null;
    }

    /**
    * Sets the approvalState
    * Possible values are: pending, approved, denied, aborted, canceled.
    *
    * @param ApprovalState $val The approvalState
    *
    * @return PrivilegedApproval
    */
    public function setApprovalState($val)
    {
        $this->_propDict["approvalState"] = $val;
        return $this;
    }

    /**
    * Gets the approvalType
    *
    * @return string|null The approvalType
    */
    public function getApprovalType()
    {
        if (array_key_exists("approvalType", $this->_propDict)) {
            return $this->_propDict["approvalType"];
        } else {
            return null;
        }
    }

    /**
    * Sets the approvalType
    *
    * @param string $val The approvalType
    *
    * @return PrivilegedApproval
    */
    public function setApprovalType($val)
    {
        $this->_propDict["approvalType"] = $val;
        return $this;
    }

    /**
    * Gets the approverReason
    *
    * @return string|null The approverReason
    */
    public function getApproverReason()
    {
        if (array_key_exists("approverReason", $this->_propDict)) {
            return $this->_propDict["approverReason"];
        } else {
            return null;
        }
    }

    /**
    * Sets the approverReason
    *
    * @param string $val The approverReason
    *
    * @return PrivilegedApproval
    */
    public function setApproverReason($val)
    {
        $this->_propDict["approverReason"] = $val;
        return $this;
    }

    /**
    * Gets the endDateTime
    * The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
    *
    * @return \DateTime|null The endDateTime
    */
    public function getEndDateTime()
    {
        if (array_key_exists("endDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["endDateTime"], "\DateTime") || is_null($this->_propDict["endDateTime"])) {
                return $this->_propDict["endDateTime"];
            } else {
                $this->_propDict["endDateTime"] = new \DateTime($this->_propDict["endDateTime"]);
                return $this->_propDict["endDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the endDateTime
    * The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
    *
    * @param \DateTime $val The endDateTime
    *
    * @return PrivilegedApproval
    */
    public function setEndDateTime($val)
    {
        $this->_propDict["endDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the requestorReason
    *
    * @return string|null The requestorReason
    */
    public function getRequestorReason()
    {
        if (array_key_exists("requestorReason", $this->_propDict)) {
            return $this->_propDict["requestorReason"];
        } else {
            return null;
        }
    }

    /**
    * Sets the requestorReason
    *
    * @param string $val The requestorReason
    *
    * @return PrivilegedApproval
    */
    public function setRequestorReason($val)
    {
        $this->_propDict["requestorReason"] = $val;
        return $this;
    }

    /**
    * Gets the roleId
    *
    * @return string|null The roleId
    */
    public function getRoleId()
    {
        if (array_key_exists("roleId", $this->_propDict)) {
            return $this->_propDict["roleId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the roleId
    *
    * @param string $val The roleId
    *
    * @return PrivilegedApproval
    */
    public function setRoleId($val)
    {
        $this->_propDict["roleId"] = $val;
        return $this;
    }

    /**
    * Gets the startDateTime
    * The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
    *
    * @return \DateTime|null The startDateTime
    */
    public function getStartDateTime()
    {
        if (array_key_exists("startDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["startDateTime"], "\DateTime") || is_null($this->_propDict["startDateTime"])) {
                return $this->_propDict["startDateTime"];
            } else {
                $this->_propDict["startDateTime"] = new \DateTime($this->_propDict["startDateTime"]);
                return $this->_propDict["startDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the startDateTime
    * The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
    *
    * @param \DateTime $val The startDateTime
    *
    * @return PrivilegedApproval
    */
    public function setStartDateTime($val)
    {
        $this->_propDict["startDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the userId
    *
    * @return string|null The userId
    */
    public function getUserId()
    {
        if (array_key_exists("userId", $this->_propDict)) {
            return $this->_propDict["userId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the userId
    *
    * @param string $val The userId
    *
    * @return PrivilegedApproval
    */
    public function setUserId($val)
    {
        $this->_propDict["userId"] = $val;
        return $this;
    }

    /**
    * Gets the request
    * Read-only. The role assignment request for this approval object
    *
    * @return PrivilegedRoleAssignmentRequest|null The request
    */
    public function getRequest()
    {
        if (array_key_exists("request", $this->_propDict)) {
            if (is_a($this->_propDict["request"], "\Beta\Microsoft\Graph\Model\PrivilegedRoleAssignmentRequest") || is_null($this->_propDict["request"])) {
                return $this->_propDict["request"];
            } else {
                $this->_propDict["request"] = new PrivilegedRoleAssignmentRequest($this->_propDict["request"]);
                return $this->_propDict["request"];
            }
        }
        return null;
    }

    /**
    * Sets the request
    * Read-only. The role assignment request for this approval object
    *
    * @param PrivilegedRoleAssignmentRequest $val The request
    *
    * @return PrivilegedApproval
    */
    public function setRequest($val)
    {
        $this->_propDict["request"] = $val;
        return $this;
    }

    /**
    * Gets the roleInfo
    *
    * @return PrivilegedRole|null The roleInfo
    */
    public function getRoleInfo()
    {
        if (array_key_exists("roleInfo", $this->_propDict)) {
            if (is_a($this->_propDict["roleInfo"], "\Beta\Microsoft\Graph\Model\PrivilegedRole") || is_null($this->_propDict["roleInfo"])) {
                return $this->_propDict["roleInfo"];
            } else {
                $this->_propDict["roleInfo"] = new PrivilegedRole($this->_propDict["roleInfo"]);
                return $this->_propDict["roleInfo"];
            }
        }
        return null;
    }

    /**
    * Sets the roleInfo
    *
    * @param PrivilegedRole $val The roleInfo
    *
    * @return PrivilegedApproval
    */
    public function setRoleInfo($val)
    {
        $this->_propDict["roleInfo"] = $val;
        return $this;
    }

}
