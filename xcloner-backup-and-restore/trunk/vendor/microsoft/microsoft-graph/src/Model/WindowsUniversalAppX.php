<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WindowsUniversalAppX File
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
* WindowsUniversalAppX class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class WindowsUniversalAppX extends MobileLobApp
{
    /**
    * Gets the applicableArchitectures
    * The Windows architecture(s) for which this app can run on. Possible values are: none, x86, x64, arm, neutral.
    *
    * @return WindowsArchitecture|null The applicableArchitectures
    */
    public function getApplicableArchitectures()
    {
        if (array_key_exists("applicableArchitectures", $this->_propDict)) {
            if (is_a($this->_propDict["applicableArchitectures"], "\Microsoft\Graph\Model\WindowsArchitecture") || is_null($this->_propDict["applicableArchitectures"])) {
                return $this->_propDict["applicableArchitectures"];
            } else {
                $this->_propDict["applicableArchitectures"] = new WindowsArchitecture($this->_propDict["applicableArchitectures"]);
                return $this->_propDict["applicableArchitectures"];
            }
        }
        return null;
    }

    /**
    * Sets the applicableArchitectures
    * The Windows architecture(s) for which this app can run on. Possible values are: none, x86, x64, arm, neutral.
    *
    * @param WindowsArchitecture $val The applicableArchitectures
    *
    * @return WindowsUniversalAppX
    */
    public function setApplicableArchitectures($val)
    {
        $this->_propDict["applicableArchitectures"] = $val;
        return $this;
    }

    /**
    * Gets the applicableDeviceTypes
    * The Windows device type(s) for which this app can run on. Possible values are: none, desktop, mobile, holographic, team.
    *
    * @return WindowsDeviceType|null The applicableDeviceTypes
    */
    public function getApplicableDeviceTypes()
    {
        if (array_key_exists("applicableDeviceTypes", $this->_propDict)) {
            if (is_a($this->_propDict["applicableDeviceTypes"], "\Microsoft\Graph\Model\WindowsDeviceType") || is_null($this->_propDict["applicableDeviceTypes"])) {
                return $this->_propDict["applicableDeviceTypes"];
            } else {
                $this->_propDict["applicableDeviceTypes"] = new WindowsDeviceType($this->_propDict["applicableDeviceTypes"]);
                return $this->_propDict["applicableDeviceTypes"];
            }
        }
        return null;
    }

    /**
    * Sets the applicableDeviceTypes
    * The Windows device type(s) for which this app can run on. Possible values are: none, desktop, mobile, holographic, team.
    *
    * @param WindowsDeviceType $val The applicableDeviceTypes
    *
    * @return WindowsUniversalAppX
    */
    public function setApplicableDeviceTypes($val)
    {
        $this->_propDict["applicableDeviceTypes"] = $val;
        return $this;
    }

    /**
    * Gets the identityName
    * The Identity Name.
    *
    * @return string|null The identityName
    */
    public function getIdentityName()
    {
        if (array_key_exists("identityName", $this->_propDict)) {
            return $this->_propDict["identityName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the identityName
    * The Identity Name.
    *
    * @param string $val The identityName
    *
    * @return WindowsUniversalAppX
    */
    public function setIdentityName($val)
    {
        $this->_propDict["identityName"] = $val;
        return $this;
    }

    /**
    * Gets the identityPublisherHash
    * The Identity Publisher Hash.
    *
    * @return string|null The identityPublisherHash
    */
    public function getIdentityPublisherHash()
    {
        if (array_key_exists("identityPublisherHash", $this->_propDict)) {
            return $this->_propDict["identityPublisherHash"];
        } else {
            return null;
        }
    }

    /**
    * Sets the identityPublisherHash
    * The Identity Publisher Hash.
    *
    * @param string $val The identityPublisherHash
    *
    * @return WindowsUniversalAppX
    */
    public function setIdentityPublisherHash($val)
    {
        $this->_propDict["identityPublisherHash"] = $val;
        return $this;
    }

    /**
    * Gets the identityResourceIdentifier
    * The Identity Resource Identifier.
    *
    * @return string|null The identityResourceIdentifier
    */
    public function getIdentityResourceIdentifier()
    {
        if (array_key_exists("identityResourceIdentifier", $this->_propDict)) {
            return $this->_propDict["identityResourceIdentifier"];
        } else {
            return null;
        }
    }

    /**
    * Sets the identityResourceIdentifier
    * The Identity Resource Identifier.
    *
    * @param string $val The identityResourceIdentifier
    *
    * @return WindowsUniversalAppX
    */
    public function setIdentityResourceIdentifier($val)
    {
        $this->_propDict["identityResourceIdentifier"] = $val;
        return $this;
    }

    /**
    * Gets the identityVersion
    * The identity version.
    *
    * @return string|null The identityVersion
    */
    public function getIdentityVersion()
    {
        if (array_key_exists("identityVersion", $this->_propDict)) {
            return $this->_propDict["identityVersion"];
        } else {
            return null;
        }
    }

    /**
    * Sets the identityVersion
    * The identity version.
    *
    * @param string $val The identityVersion
    *
    * @return WindowsUniversalAppX
    */
    public function setIdentityVersion($val)
    {
        $this->_propDict["identityVersion"] = $val;
        return $this;
    }

    /**
    * Gets the isBundle
    * Whether or not the app is a bundle.
    *
    * @return bool|null The isBundle
    */
    public function getIsBundle()
    {
        if (array_key_exists("isBundle", $this->_propDict)) {
            return $this->_propDict["isBundle"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isBundle
    * Whether or not the app is a bundle.
    *
    * @param bool $val The isBundle
    *
    * @return WindowsUniversalAppX
    */
    public function setIsBundle($val)
    {
        $this->_propDict["isBundle"] = boolval($val);
        return $this;
    }

    /**
    * Gets the minimumSupportedOperatingSystem
    * The value for the minimum applicable operating system.
    *
    * @return WindowsMinimumOperatingSystem|null The minimumSupportedOperatingSystem
    */
    public function getMinimumSupportedOperatingSystem()
    {
        if (array_key_exists("minimumSupportedOperatingSystem", $this->_propDict)) {
            if (is_a($this->_propDict["minimumSupportedOperatingSystem"], "\Microsoft\Graph\Model\WindowsMinimumOperatingSystem") || is_null($this->_propDict["minimumSupportedOperatingSystem"])) {
                return $this->_propDict["minimumSupportedOperatingSystem"];
            } else {
                $this->_propDict["minimumSupportedOperatingSystem"] = new WindowsMinimumOperatingSystem($this->_propDict["minimumSupportedOperatingSystem"]);
                return $this->_propDict["minimumSupportedOperatingSystem"];
            }
        }
        return null;
    }

    /**
    * Sets the minimumSupportedOperatingSystem
    * The value for the minimum applicable operating system.
    *
    * @param WindowsMinimumOperatingSystem $val The minimumSupportedOperatingSystem
    *
    * @return WindowsUniversalAppX
    */
    public function setMinimumSupportedOperatingSystem($val)
    {
        $this->_propDict["minimumSupportedOperatingSystem"] = $val;
        return $this;
    }

}
