<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceConfigurationDeviceOverview File
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
* DeviceConfigurationDeviceOverview class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DeviceConfigurationDeviceOverview extends Entity
{
    /**
    * Gets the configurationVersion
    * Version of the policy for that overview
    *
    * @return int|null The configurationVersion
    */
    public function getConfigurationVersion()
    {
        if (array_key_exists("configurationVersion", $this->_propDict)) {
            return $this->_propDict["configurationVersion"];
        } else {
            return null;
        }
    }

    /**
    * Sets the configurationVersion
    * Version of the policy for that overview
    *
    * @param int $val The configurationVersion
    *
    * @return DeviceConfigurationDeviceOverview
    */
    public function setConfigurationVersion($val)
    {
        $this->_propDict["configurationVersion"] = intval($val);
        return $this;
    }

    /**
    * Gets the errorCount
    * Number of error devices
    *
    * @return int|null The errorCount
    */
    public function getErrorCount()
    {
        if (array_key_exists("errorCount", $this->_propDict)) {
            return $this->_propDict["errorCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the errorCount
    * Number of error devices
    *
    * @param int $val The errorCount
    *
    * @return DeviceConfigurationDeviceOverview
    */
    public function setErrorCount($val)
    {
        $this->_propDict["errorCount"] = intval($val);
        return $this;
    }

    /**
    * Gets the failedCount
    * Number of failed devices
    *
    * @return int|null The failedCount
    */
    public function getFailedCount()
    {
        if (array_key_exists("failedCount", $this->_propDict)) {
            return $this->_propDict["failedCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the failedCount
    * Number of failed devices
    *
    * @param int $val The failedCount
    *
    * @return DeviceConfigurationDeviceOverview
    */
    public function setFailedCount($val)
    {
        $this->_propDict["failedCount"] = intval($val);
        return $this;
    }

    /**
    * Gets the lastUpdateDateTime
    * Last update time
    *
    * @return \DateTime|null The lastUpdateDateTime
    */
    public function getLastUpdateDateTime()
    {
        if (array_key_exists("lastUpdateDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["lastUpdateDateTime"], "\DateTime") || is_null($this->_propDict["lastUpdateDateTime"])) {
                return $this->_propDict["lastUpdateDateTime"];
            } else {
                $this->_propDict["lastUpdateDateTime"] = new \DateTime($this->_propDict["lastUpdateDateTime"]);
                return $this->_propDict["lastUpdateDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the lastUpdateDateTime
    * Last update time
    *
    * @param \DateTime $val The lastUpdateDateTime
    *
    * @return DeviceConfigurationDeviceOverview
    */
    public function setLastUpdateDateTime($val)
    {
        $this->_propDict["lastUpdateDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the notApplicableCount
    * Number of not applicable devices
    *
    * @return int|null The notApplicableCount
    */
    public function getNotApplicableCount()
    {
        if (array_key_exists("notApplicableCount", $this->_propDict)) {
            return $this->_propDict["notApplicableCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the notApplicableCount
    * Number of not applicable devices
    *
    * @param int $val The notApplicableCount
    *
    * @return DeviceConfigurationDeviceOverview
    */
    public function setNotApplicableCount($val)
    {
        $this->_propDict["notApplicableCount"] = intval($val);
        return $this;
    }

    /**
    * Gets the pendingCount
    * Number of pending devices
    *
    * @return int|null The pendingCount
    */
    public function getPendingCount()
    {
        if (array_key_exists("pendingCount", $this->_propDict)) {
            return $this->_propDict["pendingCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the pendingCount
    * Number of pending devices
    *
    * @param int $val The pendingCount
    *
    * @return DeviceConfigurationDeviceOverview
    */
    public function setPendingCount($val)
    {
        $this->_propDict["pendingCount"] = intval($val);
        return $this;
    }

    /**
    * Gets the successCount
    * Number of succeeded devices
    *
    * @return int|null The successCount
    */
    public function getSuccessCount()
    {
        if (array_key_exists("successCount", $this->_propDict)) {
            return $this->_propDict["successCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the successCount
    * Number of succeeded devices
    *
    * @param int $val The successCount
    *
    * @return DeviceConfigurationDeviceOverview
    */
    public function setSuccessCount($val)
    {
        $this->_propDict["successCount"] = intval($val);
        return $this;
    }

}
