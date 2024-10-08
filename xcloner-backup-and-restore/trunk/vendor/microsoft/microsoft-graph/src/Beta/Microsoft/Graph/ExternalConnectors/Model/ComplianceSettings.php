<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ComplianceSettings File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\ExternalConnectors\Model;

if (!defined('ABSPATH') && PHP_SAPI !== 'cli') { die(); }

/**
* ComplianceSettings class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ComplianceSettings extends \Beta\Microsoft\Graph\Model\Entity
{

    /**
    * Gets the eDiscoveryResultTemplates
    * Enables the developer to define the appearance of the content and configure conditions that dictate when the template should be displayed. Maximum of two eDiscovery result templates per connection.
    *
    * @return DisplayTemplate|null The eDiscoveryResultTemplates
    */
    public function getEDiscoveryResultTemplates()
    {
        if (array_key_exists("eDiscoveryResultTemplates", $this->_propDict)) {
            if (is_a($this->_propDict["eDiscoveryResultTemplates"], "\Beta\Microsoft\Graph\ExternalConnectors\Model\DisplayTemplate") || is_null($this->_propDict["eDiscoveryResultTemplates"])) {
                return $this->_propDict["eDiscoveryResultTemplates"];
            } else {
                $this->_propDict["eDiscoveryResultTemplates"] = new DisplayTemplate($this->_propDict["eDiscoveryResultTemplates"]);
                return $this->_propDict["eDiscoveryResultTemplates"];
            }
        }
        return null;
    }

    /**
    * Sets the eDiscoveryResultTemplates
    * Enables the developer to define the appearance of the content and configure conditions that dictate when the template should be displayed. Maximum of two eDiscovery result templates per connection.
    *
    * @param DisplayTemplate $val The value to assign to the eDiscoveryResultTemplates
    *
    * @return ComplianceSettings The ComplianceSettings
    */
    public function setEDiscoveryResultTemplates($val)
    {
        $this->_propDict["eDiscoveryResultTemplates"] = $val;
         return $this;
    }
}
