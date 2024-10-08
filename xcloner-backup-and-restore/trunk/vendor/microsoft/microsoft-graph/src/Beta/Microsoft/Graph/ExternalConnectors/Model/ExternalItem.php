<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ExternalItem File
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
* ExternalItem class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ExternalItem extends \Beta\Microsoft\Graph\Model\Entity
{

     /**
     * Gets the acl
    * An array of access control entries. Each entry specifies the access granted to a user or group. Required.
     *
     * @return array|null The acl
     */
    public function getAcl()
    {
        if (array_key_exists("acl", $this->_propDict)) {
           return $this->_propDict["acl"];
        } else {
            return null;
        }
    }

    /**
    * Sets the acl
    * An array of access control entries. Each entry specifies the access granted to a user or group. Required.
    *
    * @param Acl[] $val The acl
    *
    * @return ExternalItem
    */
    public function setAcl($val)
    {
        $this->_propDict["acl"] = $val;
        return $this;
    }

    /**
    * Gets the content
    * A plain-text representation of the contents of the item. The text in this property is full-text indexed. Optional.
    *
    * @return ExternalItemContent|null The content
    */
    public function getContent()
    {
        if (array_key_exists("content", $this->_propDict)) {
            if (is_a($this->_propDict["content"], "\Beta\Microsoft\Graph\ExternalConnectors\Model\ExternalItemContent") || is_null($this->_propDict["content"])) {
                return $this->_propDict["content"];
            } else {
                $this->_propDict["content"] = new ExternalItemContent($this->_propDict["content"]);
                return $this->_propDict["content"];
            }
        }
        return null;
    }

    /**
    * Sets the content
    * A plain-text representation of the contents of the item. The text in this property is full-text indexed. Optional.
    *
    * @param ExternalItemContent $val The content
    *
    * @return ExternalItem
    */
    public function setContent($val)
    {
        $this->_propDict["content"] = $val;
        return $this;
    }

    /**
    * Gets the externalItemProperties
    * A property bag with the properties of the item. The properties MUST conform to the schema defined for the externalConnection. Required.
    *
    * @return Properties|null The externalItemProperties
    */
    public function getExternalItemProperties()
    {
        if (array_key_exists("properties", $this->_propDict)) {
            if (is_a($this->_propDict["properties"], "\Beta\Microsoft\Graph\ExternalConnectors\Model\Properties") || is_null($this->_propDict["properties"])) {
                return $this->_propDict["properties"];
            } else {
                $this->_propDict["properties"] = new Properties($this->_propDict["properties"]);
                return $this->_propDict["properties"];
            }
        }
        return null;
    }

    /**
    * Sets the externalItemProperties
    * A property bag with the properties of the item. The properties MUST conform to the schema defined for the externalConnection. Required.
    *
    * @param Properties $val The externalItemProperties
    *
    * @return ExternalItem
    */
    public function setExternalItemProperties($val)
    {
        $this->_propDict["properties"] = $val;
        return $this;
    }


     /**
     * Gets the activities
    * Write-only property. Returns results.
     *
     * @return array|null The activities
     */
    public function getActivities()
    {
        if (array_key_exists("activities", $this->_propDict)) {
           return $this->_propDict["activities"];
        } else {
            return null;
        }
    }

    /**
    * Sets the activities
    * Write-only property. Returns results.
    *
    * @param ExternalActivity[] $val The activities
    *
    * @return ExternalItem
    */
    public function setActivities($val)
    {
        $this->_propDict["activities"] = $val;
        return $this;
    }

}
