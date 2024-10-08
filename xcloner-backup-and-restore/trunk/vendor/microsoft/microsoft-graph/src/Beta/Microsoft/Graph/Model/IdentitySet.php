<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* IdentitySet File
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
* IdentitySet class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class IdentitySet extends Entity
{

    /**
    * Gets the application
    * Optional. The application associated with this action.
    *
    * @return Identity|null The application
    */
    public function getApplication()
    {
        if (array_key_exists("application", $this->_propDict)) {
            if (is_a($this->_propDict["application"], "\Beta\Microsoft\Graph\Model\Identity") || is_null($this->_propDict["application"])) {
                return $this->_propDict["application"];
            } else {
                $this->_propDict["application"] = new Identity($this->_propDict["application"]);
                return $this->_propDict["application"];
            }
        }
        return null;
    }

    /**
    * Sets the application
    * Optional. The application associated with this action.
    *
    * @param Identity $val The value to assign to the application
    *
    * @return IdentitySet The IdentitySet
    */
    public function setApplication($val)
    {
        $this->_propDict["application"] = $val;
         return $this;
    }

    /**
    * Gets the device
    * Optional. The device associated with this action.
    *
    * @return Identity|null The device
    */
    public function getDevice()
    {
        if (array_key_exists("device", $this->_propDict)) {
            if (is_a($this->_propDict["device"], "\Beta\Microsoft\Graph\Model\Identity") || is_null($this->_propDict["device"])) {
                return $this->_propDict["device"];
            } else {
                $this->_propDict["device"] = new Identity($this->_propDict["device"]);
                return $this->_propDict["device"];
            }
        }
        return null;
    }

    /**
    * Sets the device
    * Optional. The device associated with this action.
    *
    * @param Identity $val The value to assign to the device
    *
    * @return IdentitySet The IdentitySet
    */
    public function setDevice($val)
    {
        $this->_propDict["device"] = $val;
         return $this;
    }

    /**
    * Gets the user
    * Optional. The user associated with this action.
    *
    * @return Identity|null The user
    */
    public function getUser()
    {
        if (array_key_exists("user", $this->_propDict)) {
            if (is_a($this->_propDict["user"], "\Beta\Microsoft\Graph\Model\Identity") || is_null($this->_propDict["user"])) {
                return $this->_propDict["user"];
            } else {
                $this->_propDict["user"] = new Identity($this->_propDict["user"]);
                return $this->_propDict["user"];
            }
        }
        return null;
    }

    /**
    * Sets the user
    * Optional. The user associated with this action.
    *
    * @param Identity $val The value to assign to the user
    *
    * @return IdentitySet The IdentitySet
    */
    public function setUser($val)
    {
        $this->_propDict["user"] = $val;
         return $this;
    }
}
