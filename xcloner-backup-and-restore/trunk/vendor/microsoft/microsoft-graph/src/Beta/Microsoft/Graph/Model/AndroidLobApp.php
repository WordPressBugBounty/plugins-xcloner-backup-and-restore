<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AndroidLobApp File
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
* AndroidLobApp class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AndroidLobApp extends MobileLobApp
{
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
    * @return AndroidLobApp
    */
    public function setIdentityName($val)
    {
        $this->_propDict["identityName"] = $val;
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
    * @return AndroidLobApp
    */
    public function setIdentityVersion($val)
    {
        $this->_propDict["identityVersion"] = $val;
        return $this;
    }

    /**
    * Gets the minimumSupportedOperatingSystem
    * The value for the minimum applicable operating system.
    *
    * @return AndroidMinimumOperatingSystem|null The minimumSupportedOperatingSystem
    */
    public function getMinimumSupportedOperatingSystem()
    {
        if (array_key_exists("minimumSupportedOperatingSystem", $this->_propDict)) {
            if (is_a($this->_propDict["minimumSupportedOperatingSystem"], "\Beta\Microsoft\Graph\Model\AndroidMinimumOperatingSystem") || is_null($this->_propDict["minimumSupportedOperatingSystem"])) {
                return $this->_propDict["minimumSupportedOperatingSystem"];
            } else {
                $this->_propDict["minimumSupportedOperatingSystem"] = new AndroidMinimumOperatingSystem($this->_propDict["minimumSupportedOperatingSystem"]);
                return $this->_propDict["minimumSupportedOperatingSystem"];
            }
        }
        return null;
    }

    /**
    * Sets the minimumSupportedOperatingSystem
    * The value for the minimum applicable operating system.
    *
    * @param AndroidMinimumOperatingSystem $val The minimumSupportedOperatingSystem
    *
    * @return AndroidLobApp
    */
    public function setMinimumSupportedOperatingSystem($val)
    {
        $this->_propDict["minimumSupportedOperatingSystem"] = $val;
        return $this;
    }

    /**
    * Gets the packageId
    * The package identifier.
    *
    * @return string|null The packageId
    */
    public function getPackageId()
    {
        if (array_key_exists("packageId", $this->_propDict)) {
            return $this->_propDict["packageId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the packageId
    * The package identifier.
    *
    * @param string $val The packageId
    *
    * @return AndroidLobApp
    */
    public function setPackageId($val)
    {
        $this->_propDict["packageId"] = $val;
        return $this;
    }

    /**
    * Gets the versionCode
    * The version code of Android Line of Business (LoB) app.
    *
    * @return string|null The versionCode
    */
    public function getVersionCode()
    {
        if (array_key_exists("versionCode", $this->_propDict)) {
            return $this->_propDict["versionCode"];
        } else {
            return null;
        }
    }

    /**
    * Sets the versionCode
    * The version code of Android Line of Business (LoB) app.
    *
    * @param string $val The versionCode
    *
    * @return AndroidLobApp
    */
    public function setVersionCode($val)
    {
        $this->_propDict["versionCode"] = $val;
        return $this;
    }

    /**
    * Gets the versionName
    * The version name of Android Line of Business (LoB) app.
    *
    * @return string|null The versionName
    */
    public function getVersionName()
    {
        if (array_key_exists("versionName", $this->_propDict)) {
            return $this->_propDict["versionName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the versionName
    * The version name of Android Line of Business (LoB) app.
    *
    * @param string $val The versionName
    *
    * @return AndroidLobApp
    */
    public function setVersionName($val)
    {
        $this->_propDict["versionName"] = $val;
        return $this;
    }

}
