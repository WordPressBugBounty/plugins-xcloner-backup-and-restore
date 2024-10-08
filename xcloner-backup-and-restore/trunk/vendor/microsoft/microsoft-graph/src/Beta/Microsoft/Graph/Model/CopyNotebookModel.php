<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* CopyNotebookModel File
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
* CopyNotebookModel class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class CopyNotebookModel extends Entity
{
    /**
    * Gets the createdBy
    *
    * @return string|null The createdBy
    */
    public function getCreatedBy()
    {
        if (array_key_exists("createdBy", $this->_propDict)) {
            return $this->_propDict["createdBy"];
        } else {
            return null;
        }
    }

    /**
    * Sets the createdBy
    *
    * @param string $val The value of the createdBy
    *
    * @return CopyNotebookModel
    */
    public function setCreatedBy($val)
    {
        $this->_propDict["createdBy"] = $val;
        return $this;
    }

    /**
    * Gets the createdByIdentity
    *
    * @return IdentitySet|null The createdByIdentity
    */
    public function getCreatedByIdentity()
    {
        if (array_key_exists("createdByIdentity", $this->_propDict)) {
            if (is_a($this->_propDict["createdByIdentity"], "\Beta\Microsoft\Graph\Model\IdentitySet") || is_null($this->_propDict["createdByIdentity"])) {
                return $this->_propDict["createdByIdentity"];
            } else {
                $this->_propDict["createdByIdentity"] = new IdentitySet($this->_propDict["createdByIdentity"]);
                return $this->_propDict["createdByIdentity"];
            }
        }
        return null;
    }

    /**
    * Sets the createdByIdentity
    *
    * @param IdentitySet $val The value to assign to the createdByIdentity
    *
    * @return CopyNotebookModel The CopyNotebookModel
    */
    public function setCreatedByIdentity($val)
    {
        $this->_propDict["createdByIdentity"] = $val;
         return $this;
    }

    /**
    * Gets the createdTime
    *
    * @return \DateTime|null The createdTime
    */
    public function getCreatedTime()
    {
        if (array_key_exists("createdTime", $this->_propDict)) {
            if (is_a($this->_propDict["createdTime"], "\DateTime") || is_null($this->_propDict["createdTime"])) {
                return $this->_propDict["createdTime"];
            } else {
                $this->_propDict["createdTime"] = new \DateTime($this->_propDict["createdTime"]);
                return $this->_propDict["createdTime"];
            }
        }
        return null;
    }

    /**
    * Sets the createdTime
    *
    * @param \DateTime $val The value to assign to the createdTime
    *
    * @return CopyNotebookModel The CopyNotebookModel
    */
    public function setCreatedTime($val)
    {
        $this->_propDict["createdTime"] = $val;
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
    * @return CopyNotebookModel
    */
    public function setId($val)
    {
        $this->_propDict["id"] = $val;
        return $this;
    }
    /**
    * Gets the isDefault
    *
    * @return bool|null The isDefault
    */
    public function getIsDefault()
    {
        if (array_key_exists("isDefault", $this->_propDict)) {
            return $this->_propDict["isDefault"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isDefault
    *
    * @param bool $val The value of the isDefault
    *
    * @return CopyNotebookModel
    */
    public function setIsDefault($val)
    {
        $this->_propDict["isDefault"] = $val;
        return $this;
    }
    /**
    * Gets the isShared
    *
    * @return bool|null The isShared
    */
    public function getIsShared()
    {
        if (array_key_exists("isShared", $this->_propDict)) {
            return $this->_propDict["isShared"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isShared
    *
    * @param bool $val The value of the isShared
    *
    * @return CopyNotebookModel
    */
    public function setIsShared($val)
    {
        $this->_propDict["isShared"] = $val;
        return $this;
    }
    /**
    * Gets the lastModifiedBy
    *
    * @return string|null The lastModifiedBy
    */
    public function getLastModifiedBy()
    {
        if (array_key_exists("lastModifiedBy", $this->_propDict)) {
            return $this->_propDict["lastModifiedBy"];
        } else {
            return null;
        }
    }

    /**
    * Sets the lastModifiedBy
    *
    * @param string $val The value of the lastModifiedBy
    *
    * @return CopyNotebookModel
    */
    public function setLastModifiedBy($val)
    {
        $this->_propDict["lastModifiedBy"] = $val;
        return $this;
    }

    /**
    * Gets the lastModifiedByIdentity
    *
    * @return IdentitySet|null The lastModifiedByIdentity
    */
    public function getLastModifiedByIdentity()
    {
        if (array_key_exists("lastModifiedByIdentity", $this->_propDict)) {
            if (is_a($this->_propDict["lastModifiedByIdentity"], "\Beta\Microsoft\Graph\Model\IdentitySet") || is_null($this->_propDict["lastModifiedByIdentity"])) {
                return $this->_propDict["lastModifiedByIdentity"];
            } else {
                $this->_propDict["lastModifiedByIdentity"] = new IdentitySet($this->_propDict["lastModifiedByIdentity"]);
                return $this->_propDict["lastModifiedByIdentity"];
            }
        }
        return null;
    }

    /**
    * Sets the lastModifiedByIdentity
    *
    * @param IdentitySet $val The value to assign to the lastModifiedByIdentity
    *
    * @return CopyNotebookModel The CopyNotebookModel
    */
    public function setLastModifiedByIdentity($val)
    {
        $this->_propDict["lastModifiedByIdentity"] = $val;
         return $this;
    }

    /**
    * Gets the lastModifiedTime
    *
    * @return \DateTime|null The lastModifiedTime
    */
    public function getLastModifiedTime()
    {
        if (array_key_exists("lastModifiedTime", $this->_propDict)) {
            if (is_a($this->_propDict["lastModifiedTime"], "\DateTime") || is_null($this->_propDict["lastModifiedTime"])) {
                return $this->_propDict["lastModifiedTime"];
            } else {
                $this->_propDict["lastModifiedTime"] = new \DateTime($this->_propDict["lastModifiedTime"]);
                return $this->_propDict["lastModifiedTime"];
            }
        }
        return null;
    }

    /**
    * Sets the lastModifiedTime
    *
    * @param \DateTime $val The value to assign to the lastModifiedTime
    *
    * @return CopyNotebookModel The CopyNotebookModel
    */
    public function setLastModifiedTime($val)
    {
        $this->_propDict["lastModifiedTime"] = $val;
         return $this;
    }

    /**
    * Gets the links
    *
    * @return NotebookLinks|null The links
    */
    public function getLinks()
    {
        if (array_key_exists("links", $this->_propDict)) {
            if (is_a($this->_propDict["links"], "\Beta\Microsoft\Graph\Model\NotebookLinks") || is_null($this->_propDict["links"])) {
                return $this->_propDict["links"];
            } else {
                $this->_propDict["links"] = new NotebookLinks($this->_propDict["links"]);
                return $this->_propDict["links"];
            }
        }
        return null;
    }

    /**
    * Sets the links
    *
    * @param NotebookLinks $val The value to assign to the links
    *
    * @return CopyNotebookModel The CopyNotebookModel
    */
    public function setLinks($val)
    {
        $this->_propDict["links"] = $val;
         return $this;
    }
    /**
    * Gets the name
    *
    * @return string|null The name
    */
    public function getName()
    {
        if (array_key_exists("name", $this->_propDict)) {
            return $this->_propDict["name"];
        } else {
            return null;
        }
    }

    /**
    * Sets the name
    *
    * @param string $val The value of the name
    *
    * @return CopyNotebookModel
    */
    public function setName($val)
    {
        $this->_propDict["name"] = $val;
        return $this;
    }
    /**
    * Gets the sectionGroupsUrl
    *
    * @return string|null The sectionGroupsUrl
    */
    public function getSectionGroupsUrl()
    {
        if (array_key_exists("sectionGroupsUrl", $this->_propDict)) {
            return $this->_propDict["sectionGroupsUrl"];
        } else {
            return null;
        }
    }

    /**
    * Sets the sectionGroupsUrl
    *
    * @param string $val The value of the sectionGroupsUrl
    *
    * @return CopyNotebookModel
    */
    public function setSectionGroupsUrl($val)
    {
        $this->_propDict["sectionGroupsUrl"] = $val;
        return $this;
    }
    /**
    * Gets the sectionsUrl
    *
    * @return string|null The sectionsUrl
    */
    public function getSectionsUrl()
    {
        if (array_key_exists("sectionsUrl", $this->_propDict)) {
            return $this->_propDict["sectionsUrl"];
        } else {
            return null;
        }
    }

    /**
    * Sets the sectionsUrl
    *
    * @param string $val The value of the sectionsUrl
    *
    * @return CopyNotebookModel
    */
    public function setSectionsUrl($val)
    {
        $this->_propDict["sectionsUrl"] = $val;
        return $this;
    }
    /**
    * Gets the self
    *
    * @return string|null The self
    */
    public function getSelf()
    {
        if (array_key_exists("self", $this->_propDict)) {
            return $this->_propDict["self"];
        } else {
            return null;
        }
    }

    /**
    * Sets the self
    *
    * @param string $val The value of the self
    *
    * @return CopyNotebookModel
    */
    public function setSelf($val)
    {
        $this->_propDict["self"] = $val;
        return $this;
    }

    /**
    * Gets the userRole
    *
    * @return OnenoteUserRole|null The userRole
    */
    public function getUserRole()
    {
        if (array_key_exists("userRole", $this->_propDict)) {
            if (is_a($this->_propDict["userRole"], "\Beta\Microsoft\Graph\Model\OnenoteUserRole") || is_null($this->_propDict["userRole"])) {
                return $this->_propDict["userRole"];
            } else {
                $this->_propDict["userRole"] = new OnenoteUserRole($this->_propDict["userRole"]);
                return $this->_propDict["userRole"];
            }
        }
        return null;
    }

    /**
    * Sets the userRole
    *
    * @param OnenoteUserRole $val The value to assign to the userRole
    *
    * @return CopyNotebookModel The CopyNotebookModel
    */
    public function setUserRole($val)
    {
        $this->_propDict["userRole"] = $val;
         return $this;
    }
}
