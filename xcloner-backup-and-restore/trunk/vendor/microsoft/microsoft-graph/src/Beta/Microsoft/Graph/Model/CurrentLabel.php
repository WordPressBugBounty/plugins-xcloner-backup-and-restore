<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* CurrentLabel File
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
* CurrentLabel class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class CurrentLabel extends Entity
{

    /**
    * Gets the applicationMode
    *
    * @return ApplicationMode|null The applicationMode
    */
    public function getApplicationMode()
    {
        if (array_key_exists("applicationMode", $this->_propDict)) {
            if (is_a($this->_propDict["applicationMode"], "\Beta\Microsoft\Graph\Model\ApplicationMode") || is_null($this->_propDict["applicationMode"])) {
                return $this->_propDict["applicationMode"];
            } else {
                $this->_propDict["applicationMode"] = new ApplicationMode($this->_propDict["applicationMode"]);
                return $this->_propDict["applicationMode"];
            }
        }
        return null;
    }

    /**
    * Sets the applicationMode
    *
    * @param ApplicationMode $val The value to assign to the applicationMode
    *
    * @return CurrentLabel The CurrentLabel
    */
    public function setApplicationMode($val)
    {
        $this->_propDict["applicationMode"] = $val;
         return $this;
    }
    /**
    * Gets the id
    *
    * @return string|null The id
    */
    public function getId()
    {
        if (array_key_exists("id", $this->_propDict)) {
            return $this->_propDict["id"];
        } else {
            return null;
        }
    }

    /**
    * Sets the id
    *
    * @param string $val The value of the id
    *
    * @return CurrentLabel
    */
    public function setId($val)
    {
        $this->_propDict["id"] = $val;
        return $this;
    }
}
