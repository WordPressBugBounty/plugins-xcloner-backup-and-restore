<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceComplianceDeviceStatus File
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
* DeviceComplianceDeviceStatus class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DeviceComplianceDeviceStatus extends Entity
{
    /**
    * Gets the complianceGracePeriodExpirationDateTime
    * The DateTime when device compliance grace period expires
    *
    * @return \DateTime|null The complianceGracePeriodExpirationDateTime
    */
    public function getComplianceGracePeriodExpirationDateTime()
    {
        if (array_key_exists("complianceGracePeriodExpirationDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["complianceGracePeriodExpirationDateTime"], "\DateTime") || is_null($this->_propDict["complianceGracePeriodExpirationDateTime"])) {
                return $this->_propDict["complianceGracePeriodExpirationDateTime"];
            } else {
                $this->_propDict["complianceGracePeriodExpirationDateTime"] = new \DateTime($this->_propDict["complianceGracePeriodExpirationDateTime"]);
                return $this->_propDict["complianceGracePeriodExpirationDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the complianceGracePeriodExpirationDateTime
    * The DateTime when device compliance grace period expires
    *
    * @param \DateTime $val The complianceGracePeriodExpirationDateTime
    *
    * @return DeviceComplianceDeviceStatus
    */
    public function setComplianceGracePeriodExpirationDateTime($val)
    {
        $this->_propDict["complianceGracePeriodExpirationDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the deviceDisplayName
    * Device name of the DevicePolicyStatus.
    *
    * @return string|null The deviceDisplayName
    */
    public function getDeviceDisplayName()
    {
        if (array_key_exists("deviceDisplayName", $this->_propDict)) {
            return $this->_propDict["deviceDisplayName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the deviceDisplayName
    * Device name of the DevicePolicyStatus.
    *
    * @param string $val The deviceDisplayName
    *
    * @return DeviceComplianceDeviceStatus
    */
    public function setDeviceDisplayName($val)
    {
        $this->_propDict["deviceDisplayName"] = $val;
        return $this;
    }

    /**
    * Gets the deviceModel
    * The device model that is being reported
    *
    * @return string|null The deviceModel
    */
    public function getDeviceModel()
    {
        if (array_key_exists("deviceModel", $this->_propDict)) {
            return $this->_propDict["deviceModel"];
        } else {
            return null;
        }
    }

    /**
    * Sets the deviceModel
    * The device model that is being reported
    *
    * @param string $val The deviceModel
    *
    * @return DeviceComplianceDeviceStatus
    */
    public function setDeviceModel($val)
    {
        $this->_propDict["deviceModel"] = $val;
        return $this;
    }

    /**
    * Gets the lastReportedDateTime
    * Last modified date time of the policy report.
    *
    * @return \DateTime|null The lastReportedDateTime
    */
    public function getLastReportedDateTime()
    {
        if (array_key_exists("lastReportedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["lastReportedDateTime"], "\DateTime") || is_null($this->_propDict["lastReportedDateTime"])) {
                return $this->_propDict["lastReportedDateTime"];
            } else {
                $this->_propDict["lastReportedDateTime"] = new \DateTime($this->_propDict["lastReportedDateTime"]);
                return $this->_propDict["lastReportedDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the lastReportedDateTime
    * Last modified date time of the policy report.
    *
    * @param \DateTime $val The lastReportedDateTime
    *
    * @return DeviceComplianceDeviceStatus
    */
    public function setLastReportedDateTime($val)
    {
        $this->_propDict["lastReportedDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the platform
    * Platform of the device that is being reported
    *
    * @return int|null The platform
    */
    public function getPlatform()
    {
        if (array_key_exists("platform", $this->_propDict)) {
            return $this->_propDict["platform"];
        } else {
            return null;
        }
    }

    /**
    * Sets the platform
    * Platform of the device that is being reported
    *
    * @param int $val The platform
    *
    * @return DeviceComplianceDeviceStatus
    */
    public function setPlatform($val)
    {
        $this->_propDict["platform"] = intval($val);
        return $this;
    }

    /**
    * Gets the status
    * Compliance status of the policy report. Possible values are: unknown, notApplicable, compliant, remediated, nonCompliant, error, conflict, notAssigned.
    *
    * @return ComplianceStatus|null The status
    */
    public function getStatus()
    {
        if (array_key_exists("status", $this->_propDict)) {
            if (is_a($this->_propDict["status"], "\Beta\Microsoft\Graph\Model\ComplianceStatus") || is_null($this->_propDict["status"])) {
                return $this->_propDict["status"];
            } else {
                $this->_propDict["status"] = new ComplianceStatus($this->_propDict["status"]);
                return $this->_propDict["status"];
            }
        }
        return null;
    }

    /**
    * Sets the status
    * Compliance status of the policy report. Possible values are: unknown, notApplicable, compliant, remediated, nonCompliant, error, conflict, notAssigned.
    *
    * @param ComplianceStatus $val The status
    *
    * @return DeviceComplianceDeviceStatus
    */
    public function setStatus($val)
    {
        $this->_propDict["status"] = $val;
        return $this;
    }

    /**
    * Gets the userName
    * The User Name that is being reported
    *
    * @return string|null The userName
    */
    public function getUserName()
    {
        if (array_key_exists("userName", $this->_propDict)) {
            return $this->_propDict["userName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the userName
    * The User Name that is being reported
    *
    * @param string $val The userName
    *
    * @return DeviceComplianceDeviceStatus
    */
    public function setUserName($val)
    {
        $this->_propDict["userName"] = $val;
        return $this;
    }

    /**
    * Gets the userPrincipalName
    * UserPrincipalName.
    *
    * @return string|null The userPrincipalName
    */
    public function getUserPrincipalName()
    {
        if (array_key_exists("userPrincipalName", $this->_propDict)) {
            return $this->_propDict["userPrincipalName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the userPrincipalName
    * UserPrincipalName.
    *
    * @param string $val The userPrincipalName
    *
    * @return DeviceComplianceDeviceStatus
    */
    public function setUserPrincipalName($val)
    {
        $this->_propDict["userPrincipalName"] = $val;
        return $this;
    }

}
