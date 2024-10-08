<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceManagementSettingIntegerConstraint File
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
* DeviceManagementSettingIntegerConstraint class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DeviceManagementSettingIntegerConstraint extends DeviceManagementConstraint
{
    /**
    * Set the @odata.type since this type is immediately descended from an abstract
    * type that is referenced as the type in an entity.
    * @param array $propDict The property dictionary
    */
    public function __construct($propDict = array())
    {
        parent::__construct($propDict);
        $this->setODataType("#microsoft.graph.deviceManagementSettingIntegerConstraint");
    }

    /**
    * Gets the maximumValue
    * The maximum permitted value
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
    * The maximum permitted value
    *
    * @param int $val The value of the maximumValue
    *
    * @return DeviceManagementSettingIntegerConstraint
    */
    public function setMaximumValue($val)
    {
        $this->_propDict["maximumValue"] = $val;
        return $this;
    }
    /**
    * Gets the minimumValue
    * The minimum permitted value
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
    * The minimum permitted value
    *
    * @param int $val The value of the minimumValue
    *
    * @return DeviceManagementSettingIntegerConstraint
    */
    public function setMinimumValue($val)
    {
        $this->_propDict["minimumValue"] = $val;
        return $this;
    }
}
