<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ProviderTenantSetting File
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
* ProviderTenantSetting class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ProviderTenantSetting extends Entity
{
    /**
    * Gets the azureTenantId
    *
    * @return string|null The azureTenantId
    */
    public function getAzureTenantId()
    {
        if (array_key_exists("azureTenantId", $this->_propDict)) {
            return $this->_propDict["azureTenantId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the azureTenantId
    *
    * @param string $val The azureTenantId
    *
    * @return ProviderTenantSetting
    */
    public function setAzureTenantId($val)
    {
        $this->_propDict["azureTenantId"] = $val;
        return $this;
    }

    /**
    * Gets the enabled
    *
    * @return bool|null The enabled
    */
    public function getEnabled()
    {
        if (array_key_exists("enabled", $this->_propDict)) {
            return $this->_propDict["enabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the enabled
    *
    * @param bool $val The enabled
    *
    * @return ProviderTenantSetting
    */
    public function setEnabled($val)
    {
        $this->_propDict["enabled"] = boolval($val);
        return $this;
    }

    /**
    * Gets the lastModifiedDateTime
    *
    * @return \DateTime|null The lastModifiedDateTime
    */
    public function getLastModifiedDateTime()
    {
        if (array_key_exists("lastModifiedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["lastModifiedDateTime"], "\DateTime") || is_null($this->_propDict["lastModifiedDateTime"])) {
                return $this->_propDict["lastModifiedDateTime"];
            } else {
                $this->_propDict["lastModifiedDateTime"] = new \DateTime($this->_propDict["lastModifiedDateTime"]);
                return $this->_propDict["lastModifiedDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the lastModifiedDateTime
    *
    * @param \DateTime $val The lastModifiedDateTime
    *
    * @return ProviderTenantSetting
    */
    public function setLastModifiedDateTime($val)
    {
        $this->_propDict["lastModifiedDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the provider
    *
    * @return string|null The provider
    */
    public function getProvider()
    {
        if (array_key_exists("provider", $this->_propDict)) {
            return $this->_propDict["provider"];
        } else {
            return null;
        }
    }

    /**
    * Sets the provider
    *
    * @param string $val The provider
    *
    * @return ProviderTenantSetting
    */
    public function setProvider($val)
    {
        $this->_propDict["provider"] = $val;
        return $this;
    }

    /**
    * Gets the vendor
    *
    * @return string|null The vendor
    */
    public function getVendor()
    {
        if (array_key_exists("vendor", $this->_propDict)) {
            return $this->_propDict["vendor"];
        } else {
            return null;
        }
    }

    /**
    * Sets the vendor
    *
    * @param string $val The vendor
    *
    * @return ProviderTenantSetting
    */
    public function setVendor($val)
    {
        $this->_propDict["vendor"] = $val;
        return $this;
    }

}
