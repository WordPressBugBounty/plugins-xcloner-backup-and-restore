<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Trending File
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
* Trending class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class Trending extends Entity
{
    /**
    * Gets the lastModifiedDateTime
    *
    * @return \DateTime|null The lastModifiedDateTime
    */
    public function getLastModifiedDateTime()
    {
        if (array_key_exists("lastModifiedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["lastModifiedDateTime"], "\DateTime") || is_null($this->_propDict["lastModifiedDateTime"])) {
                return $this->_propDict["lastModifiedDateTime"];
            } else {
                $this->_propDict["lastModifiedDateTime"] = new \DateTime($this->_propDict["lastModifiedDateTime"]);
                return $this->_propDict["lastModifiedDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the lastModifiedDateTime
    *
    * @param \DateTime $val The lastModifiedDateTime
    *
    * @return Trending
    */
    public function setLastModifiedDateTime($val)
    {
        $this->_propDict["lastModifiedDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the resourceReference
    * Reference properties of the trending document, such as the url and type of the document.
    *
    * @return ResourceReference|null The resourceReference
    */
    public function getResourceReference()
    {
        if (array_key_exists("resourceReference", $this->_propDict)) {
            if (is_a($this->_propDict["resourceReference"], "\Beta\Microsoft\Graph\Model\ResourceReference") || is_null($this->_propDict["resourceReference"])) {
                return $this->_propDict["resourceReference"];
            } else {
                $this->_propDict["resourceReference"] = new ResourceReference($this->_propDict["resourceReference"]);
                return $this->_propDict["resourceReference"];
            }
        }
        return null;
    }

    /**
    * Sets the resourceReference
    * Reference properties of the trending document, such as the url and type of the document.
    *
    * @param ResourceReference $val The resourceReference
    *
    * @return Trending
    */
    public function setResourceReference($val)
    {
        $this->_propDict["resourceReference"] = $val;
        return $this;
    }

    /**
    * Gets the resourceVisualization
    * Properties that you can use to visualize the document in your experience.
    *
    * @return ResourceVisualization|null The resourceVisualization
    */
    public function getResourceVisualization()
    {
        if (array_key_exists("resourceVisualization", $this->_propDict)) {
            if (is_a($this->_propDict["resourceVisualization"], "\Beta\Microsoft\Graph\Model\ResourceVisualization") || is_null($this->_propDict["resourceVisualization"])) {
                return $this->_propDict["resourceVisualization"];
            } else {
                $this->_propDict["resourceVisualization"] = new ResourceVisualization($this->_propDict["resourceVisualization"]);
                return $this->_propDict["resourceVisualization"];
            }
        }
        return null;
    }

    /**
    * Sets the resourceVisualization
    * Properties that you can use to visualize the document in your experience.
    *
    * @param ResourceVisualization $val The resourceVisualization
    *
    * @return Trending
    */
    public function setResourceVisualization($val)
    {
        $this->_propDict["resourceVisualization"] = $val;
        return $this;
    }

    /**
    * Gets the weight
    * Value indicating how much the document is currently trending. The larger the number, the more the document is currently trending around the user (the more relevant it is). Returned documents are sorted by this value.
    *
    * @return float|null The weight
    */
    public function getWeight()
    {
        if (array_key_exists("weight", $this->_propDict)) {
            return $this->_propDict["weight"];
        } else {
            return null;
        }
    }

    /**
    * Sets the weight
    * Value indicating how much the document is currently trending. The larger the number, the more the document is currently trending around the user (the more relevant it is). Returned documents are sorted by this value.
    *
    * @param float $val The weight
    *
    * @return Trending
    */
    public function setWeight($val)
    {
        $this->_propDict["weight"] = floatval($val);
        return $this;
    }

    /**
    * Gets the resource
    * Used for navigating to the trending document.
    *
    * @return Entity|null The resource
    */
    public function getResource()
    {
        if (array_key_exists("resource", $this->_propDict)) {
            if (is_a($this->_propDict["resource"], "\Beta\Microsoft\Graph\Model\Entity") || is_null($this->_propDict["resource"])) {
                return $this->_propDict["resource"];
            } else {
                $this->_propDict["resource"] = new Entity($this->_propDict["resource"]);
                return $this->_propDict["resource"];
            }
        }
        return null;
    }

    /**
    * Sets the resource
    * Used for navigating to the trending document.
    *
    * @param Entity $val The resource
    *
    * @return Trending
    */
    public function setResource($val)
    {
        $this->_propDict["resource"] = $val;
        return $this;
    }

}
