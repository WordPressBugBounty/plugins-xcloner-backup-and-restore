<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* TeamTemplateDefinition File
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
* TeamTemplateDefinition class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class TeamTemplateDefinition extends Entity
{
    /**
    * Gets the audience
    *
    * @return TeamTemplateAudience|null The audience
    */
    public function getAudience()
    {
        if (array_key_exists("audience", $this->_propDict)) {
            if (is_a($this->_propDict["audience"], "\Beta\Microsoft\Graph\Model\TeamTemplateAudience") || is_null($this->_propDict["audience"])) {
                return $this->_propDict["audience"];
            } else {
                $this->_propDict["audience"] = new TeamTemplateAudience($this->_propDict["audience"]);
                return $this->_propDict["audience"];
            }
        }
        return null;
    }

    /**
    * Sets the audience
    *
    * @param TeamTemplateAudience $val The audience
    *
    * @return TeamTemplateDefinition
    */
    public function setAudience($val)
    {
        $this->_propDict["audience"] = $val;
        return $this;
    }

    /**
    * Gets the categories
    *
    * @return array|null The categories
    */
    public function getCategories()
    {
        if (array_key_exists("categories", $this->_propDict)) {
            return $this->_propDict["categories"];
        } else {
            return null;
        }
    }

    /**
    * Sets the categories
    *
    * @param string[] $val The categories
    *
    * @return TeamTemplateDefinition
    */
    public function setCategories($val)
    {
        $this->_propDict["categories"] = $val;
        return $this;
    }

    /**
    * Gets the description
    *
    * @return string|null The description
    */
    public function getDescription()
    {
        if (array_key_exists("description", $this->_propDict)) {
            return $this->_propDict["description"];
        } else {
            return null;
        }
    }

    /**
    * Sets the description
    *
    * @param string $val The description
    *
    * @return TeamTemplateDefinition
    */
    public function setDescription($val)
    {
        $this->_propDict["description"] = $val;
        return $this;
    }

    /**
    * Gets the displayName
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
    *
    * @param string $val The displayName
    *
    * @return TeamTemplateDefinition
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }

    /**
    * Gets the iconUrl
    *
    * @return string|null The iconUrl
    */
    public function getIconUrl()
    {
        if (array_key_exists("iconUrl", $this->_propDict)) {
            return $this->_propDict["iconUrl"];
        } else {
            return null;
        }
    }

    /**
    * Sets the iconUrl
    *
    * @param string $val The iconUrl
    *
    * @return TeamTemplateDefinition
    */
    public function setIconUrl($val)
    {
        $this->_propDict["iconUrl"] = $val;
        return $this;
    }

    /**
    * Gets the languageTag
    *
    * @return string|null The languageTag
    */
    public function getLanguageTag()
    {
        if (array_key_exists("languageTag", $this->_propDict)) {
            return $this->_propDict["languageTag"];
        } else {
            return null;
        }
    }

    /**
    * Sets the languageTag
    *
    * @param string $val The languageTag
    *
    * @return TeamTemplateDefinition
    */
    public function setLanguageTag($val)
    {
        $this->_propDict["languageTag"] = $val;
        return $this;
    }

    /**
    * Gets the lastModifiedBy
    *
    * @return IdentitySet|null The lastModifiedBy
    */
    public function getLastModifiedBy()
    {
        if (array_key_exists("lastModifiedBy", $this->_propDict)) {
            if (is_a($this->_propDict["lastModifiedBy"], "\Beta\Microsoft\Graph\Model\IdentitySet") || is_null($this->_propDict["lastModifiedBy"])) {
                return $this->_propDict["lastModifiedBy"];
            } else {
                $this->_propDict["lastModifiedBy"] = new IdentitySet($this->_propDict["lastModifiedBy"]);
                return $this->_propDict["lastModifiedBy"];
            }
        }
        return null;
    }

    /**
    * Sets the lastModifiedBy
    *
    * @param IdentitySet $val The lastModifiedBy
    *
    * @return TeamTemplateDefinition
    */
    public function setLastModifiedBy($val)
    {
        $this->_propDict["lastModifiedBy"] = $val;
        return $this;
    }

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
    * @return TeamTemplateDefinition
    */
    public function setLastModifiedDateTime($val)
    {
        $this->_propDict["lastModifiedDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the parentTemplateId
    *
    * @return string|null The parentTemplateId
    */
    public function getParentTemplateId()
    {
        if (array_key_exists("parentTemplateId", $this->_propDict)) {
            return $this->_propDict["parentTemplateId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the parentTemplateId
    *
    * @param string $val The parentTemplateId
    *
    * @return TeamTemplateDefinition
    */
    public function setParentTemplateId($val)
    {
        $this->_propDict["parentTemplateId"] = $val;
        return $this;
    }

    /**
    * Gets the publisherName
    *
    * @return string|null The publisherName
    */
    public function getPublisherName()
    {
        if (array_key_exists("publisherName", $this->_propDict)) {
            return $this->_propDict["publisherName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the publisherName
    *
    * @param string $val The publisherName
    *
    * @return TeamTemplateDefinition
    */
    public function setPublisherName($val)
    {
        $this->_propDict["publisherName"] = $val;
        return $this;
    }

    /**
    * Gets the shortDescription
    *
    * @return string|null The shortDescription
    */
    public function getShortDescription()
    {
        if (array_key_exists("shortDescription", $this->_propDict)) {
            return $this->_propDict["shortDescription"];
        } else {
            return null;
        }
    }

    /**
    * Sets the shortDescription
    *
    * @param string $val The shortDescription
    *
    * @return TeamTemplateDefinition
    */
    public function setShortDescription($val)
    {
        $this->_propDict["shortDescription"] = $val;
        return $this;
    }

    /**
    * Gets the teamDefinition
    *
    * @return Team|null The teamDefinition
    */
    public function getTeamDefinition()
    {
        if (array_key_exists("teamDefinition", $this->_propDict)) {
            if (is_a($this->_propDict["teamDefinition"], "\Beta\Microsoft\Graph\Model\Team") || is_null($this->_propDict["teamDefinition"])) {
                return $this->_propDict["teamDefinition"];
            } else {
                $this->_propDict["teamDefinition"] = new Team($this->_propDict["teamDefinition"]);
                return $this->_propDict["teamDefinition"];
            }
        }
        return null;
    }

    /**
    * Sets the teamDefinition
    *
    * @param Team $val The teamDefinition
    *
    * @return TeamTemplateDefinition
    */
    public function setTeamDefinition($val)
    {
        $this->_propDict["teamDefinition"] = $val;
        return $this;
    }

}
