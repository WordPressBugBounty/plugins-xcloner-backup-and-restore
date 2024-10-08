<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceCompliancePolicyScript File
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
* DeviceCompliancePolicyScript class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DeviceCompliancePolicyScript extends Entity
{
    /**
    * Gets the deviceComplianceScriptId
    * Device compliance script Id.
    *
    * @return string|null The deviceComplianceScriptId
    */
    public function getDeviceComplianceScriptId()
    {
        if (array_key_exists("deviceComplianceScriptId", $this->_propDict)) {
            return $this->_propDict["deviceComplianceScriptId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the deviceComplianceScriptId
    * Device compliance script Id.
    *
    * @param string $val The value of the deviceComplianceScriptId
    *
    * @return DeviceCompliancePolicyScript
    */
    public function setDeviceComplianceScriptId($val)
    {
        $this->_propDict["deviceComplianceScriptId"] = $val;
        return $this;
    }

    /**
    * Gets the rulesContent
    * Json of the rules.
    *
    * @return \GuzzleHttp\Psr7\Stream|null The rulesContent
    */
    public function getRulesContent()
    {
        if (array_key_exists("rulesContent", $this->_propDict)) {
            if (is_a($this->_propDict["rulesContent"], "\GuzzleHttp\Psr7\Stream") || is_null($this->_propDict["rulesContent"])) {
                return $this->_propDict["rulesContent"];
            } else {
                $this->_propDict["rulesContent"] = \GuzzleHttp\Psr7\Utils::streamFor($this->_propDict["rulesContent"]);
                return $this->_propDict["rulesContent"];
            }
        }
        return null;
    }

    /**
    * Sets the rulesContent
    * Json of the rules.
    *
    * @param \GuzzleHttp\Psr7\Stream $val The value to assign to the rulesContent
    *
    * @return DeviceCompliancePolicyScript The DeviceCompliancePolicyScript
    */
    public function setRulesContent($val)
    {
        $this->_propDict["rulesContent"] = $val;
         return $this;
    }
}
