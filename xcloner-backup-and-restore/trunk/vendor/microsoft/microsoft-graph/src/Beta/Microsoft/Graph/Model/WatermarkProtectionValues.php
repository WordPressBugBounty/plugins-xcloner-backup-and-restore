<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WatermarkProtectionValues File
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
* WatermarkProtectionValues class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class WatermarkProtectionValues extends Entity
{
    /**
    * Gets the isEnabledForContentSharing
    *
    * @return bool|null The isEnabledForContentSharing
    */
    public function getIsEnabledForContentSharing()
    {
        if (array_key_exists("isEnabledForContentSharing", $this->_propDict)) {
            return $this->_propDict["isEnabledForContentSharing"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isEnabledForContentSharing
    *
    * @param bool $val The value of the isEnabledForContentSharing
    *
    * @return WatermarkProtectionValues
    */
    public function setIsEnabledForContentSharing($val)
    {
        $this->_propDict["isEnabledForContentSharing"] = $val;
        return $this;
    }
    /**
    * Gets the isEnabledForVideo
    *
    * @return bool|null The isEnabledForVideo
    */
    public function getIsEnabledForVideo()
    {
        if (array_key_exists("isEnabledForVideo", $this->_propDict)) {
            return $this->_propDict["isEnabledForVideo"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isEnabledForVideo
    *
    * @param bool $val The value of the isEnabledForVideo
    *
    * @return WatermarkProtectionValues
    */
    public function setIsEnabledForVideo($val)
    {
        $this->_propDict["isEnabledForVideo"] = $val;
        return $this;
    }
}
