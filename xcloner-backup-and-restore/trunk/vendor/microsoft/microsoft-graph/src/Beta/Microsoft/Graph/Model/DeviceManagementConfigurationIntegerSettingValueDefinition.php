<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceManagementConfigurationIntegerSettingValueDefinition File
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
* DeviceManagementConfigurationIntegerSettingValueDefinition class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DeviceManagementConfigurationIntegerSettingValueDefinition extends DeviceManagementConfigurationSettingValueDefinition
{
    /**
    * Gets the maximumValue
    * Maximum allowed value of the integer
    *
    * @return int|null The maximumValue
    */
    public function getMaximumValue()
    {
        if (array_key_exists("maximumValue", $this->_propDict)) {
            return $this->_propDict["maximumValue"];
        } else {
            return null;
        }
    }

    /**
    * Sets the maximumValue
    * Maximum allowed value of the integer
    *
    * @param int $val The value of the maximumValue
    *
    * @return DeviceManagementConfigurationIntegerSettingValueDefinition
    */
    public function setMaximumValue($val)
    {
        $this->_propDict["maximumValue"] = $val;
        return $this;
    }
    /**
    * Gets the minimumValue
    * Minimum allowed value of the integer
    *
    * @return int|null The minimumValue
    */
    public function getMinimumValue()
    {
        if (array_key_exists("minimumValue", $this->_propDict)) {
            return $this->_propDict["minimumValue"];
        } else {
            return null;
        }
    }

    /**
    * Sets the minimumValue
    * Minimum allowed value of the integer
    *
    * @param int $val The value of the minimumValue
    *
    * @return DeviceManagementConfigurationIntegerSettingValueDefinition
    */
    public function setMinimumValue($val)
    {
        $this->_propDict["minimumValue"] = $val;
        return $this;
    }
}
