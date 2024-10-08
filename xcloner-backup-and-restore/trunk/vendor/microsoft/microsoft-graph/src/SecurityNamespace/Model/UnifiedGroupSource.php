<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* UnifiedGroupSource File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Microsoft\Graph\SecurityNamespace\Model;

if (!defined('ABSPATH') && PHP_SAPI !== 'cli') { die(); }


/**
* UnifiedGroupSource class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class UnifiedGroupSource extends DataSource
{
    /**
    * Gets the includedSources
    * Specifies which sources are included in this group. Possible values are: mailbox, site.
    *
    * @return SourceType|null The includedSources
    */
    public function getIncludedSources()
    {
        if (array_key_exists("includedSources", $this->_propDict)) {
            if (is_a($this->_propDict["includedSources"], "\Microsoft\Graph\SecurityNamespace\Model\SourceType") || is_null($this->_propDict["includedSources"])) {
                return $this->_propDict["includedSources"];
            } else {
                $this->_propDict["includedSources"] = new SourceType($this->_propDict["includedSources"]);
                return $this->_propDict["includedSources"];
            }
        }
        return null;
    }

    /**
    * Sets the includedSources
    * Specifies which sources are included in this group. Possible values are: mailbox, site.
    *
    * @param SourceType $val The includedSources
    *
    * @return UnifiedGroupSource
    */
    public function setIncludedSources($val)
    {
        $this->_propDict["includedSources"] = $val;
        return $this;
    }

    /**
    * Gets the group
    * Represents a group.
    *
    * @return \Microsoft\Graph\Model\Group|null The group
    */
    public function getGroup()
    {
        if (array_key_exists("group", $this->_propDict)) {
            if (is_a($this->_propDict["group"], "\Microsoft\Graph\Model\Group") || is_null($this->_propDict["group"])) {
                return $this->_propDict["group"];
            } else {
                $this->_propDict["group"] = new \Microsoft\Graph\Model\Group($this->_propDict["group"]);
                return $this->_propDict["group"];
            }
        }
        return null;
    }

    /**
    * Sets the group
    * Represents a group.
    *
    * @param \Microsoft\Graph\Model\Group $val The group
    *
    * @return UnifiedGroupSource
    */
    public function setGroup($val)
    {
        $this->_propDict["group"] = $val;
        return $this;
    }

}
