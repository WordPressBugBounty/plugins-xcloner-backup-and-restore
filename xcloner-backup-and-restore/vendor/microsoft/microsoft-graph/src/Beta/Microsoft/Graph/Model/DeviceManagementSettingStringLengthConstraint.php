<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceManagementSettingStringLengthConstraint File
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
* DeviceManagementSettingStringLengthConstraint class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DeviceManagementSettingStringLengthConstraint extends DeviceManagementConstraint
{
    /**
    * Set the @odata.type since this type is immediately descended from an abstract
    * type that is referenced as the type in an entity.
    * @param array $propDict The property dictionary
    */
    public function __construct($propDict = array())
    {
        parent::__construct($propDict);
        $this->setODataType("#microsoft.graph.deviceManagementSettingStringLengthConstraint");
    }

    /**
    * Gets the maximumLength
    * The maximum permitted string length
    *
    * @return int|null The maximumLength
    */
    public function getMaximumLength()
    {
        if (array_key_exists("maximumLength", $this->_propDict)) {
            return $this->_propDict["maximumLength"];
        } else {
            return null;
        }
    }

    /**
    * Sets the maximumLength
    * The maximum permitted string length
    *
    * @param int $val The value of the maximumLength
    *
    * @return DeviceManagementSettingStringLengthConstraint
    */
    public function setMaximumLength($val)
    {
        $this->_propDict["maximumLength"] = $val;
        return $this;
    }
    /**
    * Gets the minimumLength
    * The minimum permitted string length
    *
    * @return int|null The minimumLength
    */
    public function getMinimumLength()
    {
        if (array_key_exists("minimumLength", $this->_propDict)) {
            return $this->_propDict["minimumLength"];
        } else {
            return null;
        }
    }

    /**
    * Sets the minimumLength
    * The minimum permitted string length
    *
    * @param int $val The value of the minimumLength
    *
    * @return DeviceManagementSettingStringLengthConstraint
    */
    public function setMinimumLength($val)
    {
        $this->_propDict["minimumLength"] = $val;
        return $this;
    }
}
