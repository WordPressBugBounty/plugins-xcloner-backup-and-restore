<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ManagedAndroidLobApp File
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
* ManagedAndroidLobApp class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ManagedAndroidLobApp extends ManagedMobileLobApp
{
    /**
    * Gets the minimumSupportedOperatingSystem
    * The value for the minimum applicable operating system.
    *
    * @return AndroidMinimumOperatingSystem|null The minimumSupportedOperatingSystem
    */
    public function getMinimumSupportedOperatingSystem()
    {
        if (array_key_exists("minimumSupportedOperatingSystem", $this->_propDict)) {
            if (is_a($this->_propDict["minimumSupportedOperatingSystem"], "\Microsoft\Graph\Model\AndroidMinimumOperatingSystem") || is_null($this->_propDict["minimumSupportedOperatingSystem"])) {
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
    * @return ManagedAndroidLobApp
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
    * @return ManagedAndroidLobApp
    */
    public function setPackageId($val)
    {
        $this->_propDict["packageId"] = $val;
        return $this;
    }

    /**
    * Gets the versionCode
    * The version code of managed Android Line of Business (LoB) app.
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
    * The version code of managed Android Line of Business (LoB) app.
    *
    * @param string $val The versionCode
    *
    * @return ManagedAndroidLobApp
    */
    public function setVersionCode($val)
    {
        $this->_propDict["versionCode"] = $val;
        return $this;
    }

    /**
    * Gets the versionName
    * The version name of managed Android Line of Business (LoB) app.
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
    * The version name of managed Android Line of Business (LoB) app.
    *
    * @param string $val The versionName
    *
    * @return ManagedAndroidLobApp
    */
    public function setVersionName($val)
    {
        $this->_propDict["versionName"] = $val;
        return $this;
    }

}
