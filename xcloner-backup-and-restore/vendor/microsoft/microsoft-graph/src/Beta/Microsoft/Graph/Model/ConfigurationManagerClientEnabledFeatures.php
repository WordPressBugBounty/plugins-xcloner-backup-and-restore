<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ConfigurationManagerClientEnabledFeatures File
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
* ConfigurationManagerClientEnabledFeatures class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ConfigurationManagerClientEnabledFeatures extends Entity
{
    /**
    * Gets the compliancePolicy
    * Whether compliance policy is managed by Intune
    *
    * @return bool|null The compliancePolicy
    */
    public function getCompliancePolicy()
    {
        if (array_key_exists("compliancePolicy", $this->_propDict)) {
            return $this->_propDict["compliancePolicy"];
        } else {
            return null;
        }
    }

    /**
    * Sets the compliancePolicy
    * Whether compliance policy is managed by Intune
    *
    * @param bool $val The value of the compliancePolicy
    *
    * @return ConfigurationManagerClientEnabledFeatures
    */
    public function setCompliancePolicy($val)
    {
        $this->_propDict["compliancePolicy"] = $val;
        return $this;
    }
    /**
    * Gets the deviceConfiguration
    * Whether device configuration is managed by Intune
    *
    * @return bool|null The deviceConfiguration
    */
    public function getDeviceConfiguration()
    {
        if (array_key_exists("deviceConfiguration", $this->_propDict)) {
            return $this->_propDict["deviceConfiguration"];
        } else {
            return null;
        }
    }

    /**
    * Sets the deviceConfiguration
    * Whether device configuration is managed by Intune
    *
    * @param bool $val The value of the deviceConfiguration
    *
    * @return ConfigurationManagerClientEnabledFeatures
    */
    public function setDeviceConfiguration($val)
    {
        $this->_propDict["deviceConfiguration"] = $val;
        return $this;
    }
    /**
    * Gets the endpointProtection
    * Whether Endpoint Protection is managed by Intune
    *
    * @return bool|null The endpointProtection
    */
    public function getEndpointProtection()
    {
        if (array_key_exists("endpointProtection", $this->_propDict)) {
            return $this->_propDict["endpointProtection"];
        } else {
            return null;
        }
    }

    /**
    * Sets the endpointProtection
    * Whether Endpoint Protection is managed by Intune
    *
    * @param bool $val The value of the endpointProtection
    *
    * @return ConfigurationManagerClientEnabledFeatures
    */
    public function setEndpointProtection($val)
    {
        $this->_propDict["endpointProtection"] = $val;
        return $this;
    }
    /**
    * Gets the inventory
    * Whether inventory is managed by Intune
    *
    * @return bool|null The inventory
    */
    public function getInventory()
    {
        if (array_key_exists("inventory", $this->_propDict)) {
            return $this->_propDict["inventory"];
        } else {
            return null;
        }
    }

    /**
    * Sets the inventory
    * Whether inventory is managed by Intune
    *
    * @param bool $val The value of the inventory
    *
    * @return ConfigurationManagerClientEnabledFeatures
    */
    public function setInventory($val)
    {
        $this->_propDict["inventory"] = $val;
        return $this;
    }
    /**
    * Gets the modernApps
    * Whether modern application is managed by Intune
    *
    * @return bool|null The modernApps
    */
    public function getModernApps()
    {
        if (array_key_exists("modernApps", $this->_propDict)) {
            return $this->_propDict["modernApps"];
        } else {
            return null;
        }
    }

    /**
    * Sets the modernApps
    * Whether modern application is managed by Intune
    *
    * @param bool $val The value of the modernApps
    *
    * @return ConfigurationManagerClientEnabledFeatures
    */
    public function setModernApps($val)
    {
        $this->_propDict["modernApps"] = $val;
        return $this;
    }
    /**
    * Gets the officeApps
    * Whether Office application is managed by Intune
    *
    * @return bool|null The officeApps
    */
    public function getOfficeApps()
    {
        if (array_key_exists("officeApps", $this->_propDict)) {
            return $this->_propDict["officeApps"];
        } else {
            return null;
        }
    }

    /**
    * Sets the officeApps
    * Whether Office application is managed by Intune
    *
    * @param bool $val The value of the officeApps
    *
    * @return ConfigurationManagerClientEnabledFeatures
    */
    public function setOfficeApps($val)
    {
        $this->_propDict["officeApps"] = $val;
        return $this;
    }
    /**
    * Gets the resourceAccess
    * Whether resource access is managed by Intune
    *
    * @return bool|null The resourceAccess
    */
    public function getResourceAccess()
    {
        if (array_key_exists("resourceAccess", $this->_propDict)) {
            return $this->_propDict["resourceAccess"];
        } else {
            return null;
        }
    }

    /**
    * Sets the resourceAccess
    * Whether resource access is managed by Intune
    *
    * @param bool $val The value of the resourceAccess
    *
    * @return ConfigurationManagerClientEnabledFeatures
    */
    public function setResourceAccess($val)
    {
        $this->_propDict["resourceAccess"] = $val;
        return $this;
    }
    /**
    * Gets the windowsUpdateForBusiness
    * Whether Windows Update for Business is managed by Intune
    *
    * @return bool|null The windowsUpdateForBusiness
    */
    public function getWindowsUpdateForBusiness()
    {
        if (array_key_exists("windowsUpdateForBusiness", $this->_propDict)) {
            return $this->_propDict["windowsUpdateForBusiness"];
        } else {
            return null;
        }
    }

    /**
    * Sets the windowsUpdateForBusiness
    * Whether Windows Update for Business is managed by Intune
    *
    * @param bool $val The value of the windowsUpdateForBusiness
    *
    * @return ConfigurationManagerClientEnabledFeatures
    */
    public function setWindowsUpdateForBusiness($val)
    {
        $this->_propDict["windowsUpdateForBusiness"] = $val;
        return $this;
    }
}
