<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* TeamsTab File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Microsoft\Graph\Model;

if (!defined('ABSPATH') && PHP_SAPI !== 'cli') { die(); }


/**
* TeamsTab class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class TeamsTab extends Entity
{
    /**
    * Gets the configuration
    * Container for custom settings applied to a tab. The tab is considered configured only once this property is set.
    *
    * @return TeamsTabConfiguration|null The configuration
    */
    public function getConfiguration()
    {
        if (array_key_exists("configuration", $this->_propDict)) {
            if (is_a($this->_propDict["configuration"], "\Microsoft\Graph\Model\TeamsTabConfiguration") || is_null($this->_propDict["configuration"])) {
                return $this->_propDict["configuration"];
            } else {
                $this->_propDict["configuration"] = new TeamsTabConfiguration($this->_propDict["configuration"]);
                return $this->_propDict["configuration"];
            }
        }
        return null;
    }

    /**
    * Sets the configuration
    * Container for custom settings applied to a tab. The tab is considered configured only once this property is set.
    *
    * @param TeamsTabConfiguration $val The configuration
    *
    * @return TeamsTab
    */
    public function setConfiguration($val)
    {
        $this->_propDict["configuration"] = $val;
        return $this;
    }

    /**
    * Gets the displayName
    * Name of the tab.
    *
    * @return string|null The displayName
    */
    public function getDisplayName()
    {
        if (array_key_exists("displayName", $this->_propDict)) {
            return $this->_propDict["displayName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the displayName
    * Name of the tab.
    *
    * @param string $val The displayName
    *
    * @return TeamsTab
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }

    /**
    * Gets the webUrl
    * Deep link URL of the tab instance. Read only.
    *
    * @return string|null The webUrl
    */
    public function getWebUrl()
    {
        if (array_key_exists("webUrl", $this->_propDict)) {
            return $this->_propDict["webUrl"];
        } else {
            return null;
        }
    }

    /**
    * Sets the webUrl
    * Deep link URL of the tab instance. Read only.
    *
    * @param string $val The webUrl
    *
    * @return TeamsTab
    */
    public function setWebUrl($val)
    {
        $this->_propDict["webUrl"] = $val;
        return $this;
    }

    /**
    * Gets the teamsApp
    * The application that is linked to the tab. This cannot be changed after tab creation.
    *
    * @return TeamsApp|null The teamsApp
    */
    public function getTeamsApp()
    {
        if (array_key_exists("teamsApp", $this->_propDict)) {
            if (is_a($this->_propDict["teamsApp"], "\Microsoft\Graph\Model\TeamsApp") || is_null($this->_propDict["teamsApp"])) {
                return $this->_propDict["teamsApp"];
            } else {
                $this->_propDict["teamsApp"] = new TeamsApp($this->_propDict["teamsApp"]);
                return $this->_propDict["teamsApp"];
            }
        }
        return null;
    }

    /**
    * Sets the teamsApp
    * The application that is linked to the tab. This cannot be changed after tab creation.
    *
    * @param TeamsApp $val The teamsApp
    *
    * @return TeamsTab
    */
    public function setTeamsApp($val)
    {
        $this->_propDict["teamsApp"] = $val;
        return $this;
    }

}
