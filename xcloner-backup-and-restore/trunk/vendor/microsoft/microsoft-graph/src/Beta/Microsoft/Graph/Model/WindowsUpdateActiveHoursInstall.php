<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WindowsUpdateActiveHoursInstall File
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
* WindowsUpdateActiveHoursInstall class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class WindowsUpdateActiveHoursInstall extends WindowsUpdateInstallScheduleType
{
    /**
    * Set the @odata.type since this type is immediately descended from an abstract
    * type that is referenced as the type in an entity.
    * @param array $propDict The property dictionary
    */
    public function __construct($propDict = array())
    {
        parent::__construct($propDict);
        $this->setODataType("#microsoft.graph.windowsUpdateActiveHoursInstall");
    }


    /**
    * Gets the activeHoursEnd
    * Active Hours End
    *
    * @return TimeOfDay|null The activeHoursEnd
    */
    public function getActiveHoursEnd()
    {
        if (array_key_exists("activeHoursEnd", $this->_propDict)) {
            if (is_a($this->_propDict["activeHoursEnd"], "\Beta\Microsoft\Graph\Model\TimeOfDay") || is_null($this->_propDict["activeHoursEnd"])) {
                return $this->_propDict["activeHoursEnd"];
            } else {
                $this->_propDict["activeHoursEnd"] = new TimeOfDay($this->_propDict["activeHoursEnd"]);
                return $this->_propDict["activeHoursEnd"];
            }
        }
        return null;
    }

    /**
    * Sets the activeHoursEnd
    * Active Hours End
    *
    * @param TimeOfDay $val The value to assign to the activeHoursEnd
    *
    * @return WindowsUpdateActiveHoursInstall The WindowsUpdateActiveHoursInstall
    */
    public function setActiveHoursEnd($val)
    {
        $this->_propDict["activeHoursEnd"] = $val;
         return $this;
    }

    /**
    * Gets the activeHoursStart
    * Active Hours Start
    *
    * @return TimeOfDay|null The activeHoursStart
    */
    public function getActiveHoursStart()
    {
        if (array_key_exists("activeHoursStart", $this->_propDict)) {
            if (is_a($this->_propDict["activeHoursStart"], "\Beta\Microsoft\Graph\Model\TimeOfDay") || is_null($this->_propDict["activeHoursStart"])) {
                return $this->_propDict["activeHoursStart"];
            } else {
                $this->_propDict["activeHoursStart"] = new TimeOfDay($this->_propDict["activeHoursStart"]);
                return $this->_propDict["activeHoursStart"];
            }
        }
        return null;
    }

    /**
    * Sets the activeHoursStart
    * Active Hours Start
    *
    * @param TimeOfDay $val The value to assign to the activeHoursStart
    *
    * @return WindowsUpdateActiveHoursInstall The WindowsUpdateActiveHoursInstall
    */
    public function setActiveHoursStart($val)
    {
        $this->_propDict["activeHoursStart"] = $val;
         return $this;
    }
}
