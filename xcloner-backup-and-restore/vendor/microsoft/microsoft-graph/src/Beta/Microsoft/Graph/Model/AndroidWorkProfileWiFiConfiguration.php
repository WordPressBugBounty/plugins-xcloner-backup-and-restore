<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AndroidWorkProfileWiFiConfiguration File
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
* AndroidWorkProfileWiFiConfiguration class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AndroidWorkProfileWiFiConfiguration extends DeviceConfiguration
{
    /**
    * Gets the connectAutomatically
    * Connect automatically when this network is in range. Setting this to true will skip the user prompt and automatically connect the device to Wi-Fi network.
    *
    * @return bool|null The connectAutomatically
    */
    public function getConnectAutomatically()
    {
        if (array_key_exists("connectAutomatically", $this->_propDict)) {
            return $this->_propDict["connectAutomatically"];
        } else {
            return null;
        }
    }

    /**
    * Sets the connectAutomatically
    * Connect automatically when this network is in range. Setting this to true will skip the user prompt and automatically connect the device to Wi-Fi network.
    *
    * @param bool $val The connectAutomatically
    *
    * @return AndroidWorkProfileWiFiConfiguration
    */
    public function setConnectAutomatically($val)
    {
        $this->_propDict["connectAutomatically"] = boolval($val);
        return $this;
    }

    /**
    * Gets the connectWhenNetworkNameIsHidden
    * When set to true, this profile forces the device to connect to a network that doesn't broadcast its SSID to all devices.
    *
    * @return bool|null The connectWhenNetworkNameIsHidden
    */
    public function getConnectWhenNetworkNameIsHidden()
    {
        if (array_key_exists("connectWhenNetworkNameIsHidden", $this->_propDict)) {
            return $this->_propDict["connectWhenNetworkNameIsHidden"];
        } else {
            return null;
        }
    }

    /**
    * Sets the connectWhenNetworkNameIsHidden
    * When set to true, this profile forces the device to connect to a network that doesn't broadcast its SSID to all devices.
    *
    * @param bool $val The connectWhenNetworkNameIsHidden
    *
    * @return AndroidWorkProfileWiFiConfiguration
    */
    public function setConnectWhenNetworkNameIsHidden($val)
    {
        $this->_propDict["connectWhenNetworkNameIsHidden"] = boolval($val);
        return $this;
    }

    /**
    * Gets the networkName
    * Network Name
    *
    * @return string|null The networkName
    */
    public function getNetworkName()
    {
        if (array_key_exists("networkName", $this->_propDict)) {
            return $this->_propDict["networkName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the networkName
    * Network Name
    *
    * @param string $val The networkName
    *
    * @return AndroidWorkProfileWiFiConfiguration
    */
    public function setNetworkName($val)
    {
        $this->_propDict["networkName"] = $val;
        return $this;
    }

    /**
    * Gets the ssid
    * This is the name of the Wi-Fi network that is broadcast to all devices.
    *
    * @return string|null The ssid
    */
    public function getSsid()
    {
        if (array_key_exists("ssid", $this->_propDict)) {
            return $this->_propDict["ssid"];
        } else {
            return null;
        }
    }

    /**
    * Sets the ssid
    * This is the name of the Wi-Fi network that is broadcast to all devices.
    *
    * @param string $val The ssid
    *
    * @return AndroidWorkProfileWiFiConfiguration
    */
    public function setSsid($val)
    {
        $this->_propDict["ssid"] = $val;
        return $this;
    }

    /**
    * Gets the wiFiSecurityType
    * Indicates whether Wi-Fi endpoint uses an EAP based security type. Possible values are: open, wpaEnterprise, wpa2Enterprise.
    *
    * @return AndroidWiFiSecurityType|null The wiFiSecurityType
    */
    public function getWiFiSecurityType()
    {
        if (array_key_exists("wiFiSecurityType", $this->_propDict)) {
            if (is_a($this->_propDict["wiFiSecurityType"], "\Beta\Microsoft\Graph\Model\AndroidWiFiSecurityType") || is_null($this->_propDict["wiFiSecurityType"])) {
                return $this->_propDict["wiFiSecurityType"];
            } else {
                $this->_propDict["wiFiSecurityType"] = new AndroidWiFiSecurityType($this->_propDict["wiFiSecurityType"]);
                return $this->_propDict["wiFiSecurityType"];
            }
        }
        return null;
    }

    /**
    * Sets the wiFiSecurityType
    * Indicates whether Wi-Fi endpoint uses an EAP based security type. Possible values are: open, wpaEnterprise, wpa2Enterprise.
    *
    * @param AndroidWiFiSecurityType $val The wiFiSecurityType
    *
    * @return AndroidWorkProfileWiFiConfiguration
    */
    public function setWiFiSecurityType($val)
    {
        $this->_propDict["wiFiSecurityType"] = $val;
        return $this;
    }

}
