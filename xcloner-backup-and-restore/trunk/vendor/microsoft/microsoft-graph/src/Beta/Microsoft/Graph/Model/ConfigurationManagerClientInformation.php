<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ConfigurationManagerClientInformation File
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
* ConfigurationManagerClientInformation class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ConfigurationManagerClientInformation extends Entity
{
    /**
    * Gets the clientIdentifier
    * Configuration Manager Client Id from SCCM
    *
    * @return string|null The clientIdentifier
    */
    public function getClientIdentifier()
    {
        if (array_key_exists("clientIdentifier", $this->_propDict)) {
            return $this->_propDict["clientIdentifier"];
        } else {
            return null;
        }
    }

    /**
    * Sets the clientIdentifier
    * Configuration Manager Client Id from SCCM
    *
    * @param string $val The value of the clientIdentifier
    *
    * @return ConfigurationManagerClientInformation
    */
    public function setClientIdentifier($val)
    {
        $this->_propDict["clientIdentifier"] = $val;
        return $this;
    }
    /**
    * Gets the clientVersion
    * Configuration Manager Client version from SCCM
    *
    * @return string|null The clientVersion
    */
    public function getClientVersion()
    {
        if (array_key_exists("clientVersion", $this->_propDict)) {
            return $this->_propDict["clientVersion"];
        } else {
            return null;
        }
    }

    /**
    * Sets the clientVersion
    * Configuration Manager Client version from SCCM
    *
    * @param string $val The value of the clientVersion
    *
    * @return ConfigurationManagerClientInformation
    */
    public function setClientVersion($val)
    {
        $this->_propDict["clientVersion"] = $val;
        return $this;
    }
    /**
    * Gets the isBlocked
    * Configuration Manager Client blocked status from SCCM
    *
    * @return bool|null The isBlocked
    */
    public function getIsBlocked()
    {
        if (array_key_exists("isBlocked", $this->_propDict)) {
            return $this->_propDict["isBlocked"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isBlocked
    * Configuration Manager Client blocked status from SCCM
    *
    * @param bool $val The value of the isBlocked
    *
    * @return ConfigurationManagerClientInformation
    */
    public function setIsBlocked($val)
    {
        $this->_propDict["isBlocked"] = $val;
        return $this;
    }
}
