<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WindowsDeviceAccount File
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
* WindowsDeviceAccount class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class WindowsDeviceAccount extends Entity
{
    /**
    * Gets the password
    * Not yet documented
    *
    * @return string|null The password
    */
    public function getPassword()
    {
        if (array_key_exists("password", $this->_propDict)) {
            return $this->_propDict["password"];
        } else {
            return null;
        }
    }

    /**
    * Sets the password
    * Not yet documented
    *
    * @param string $val The value of the password
    *
    * @return WindowsDeviceAccount
    */
    public function setPassword($val)
    {
        $this->_propDict["password"] = $val;
        return $this;
    }
}
