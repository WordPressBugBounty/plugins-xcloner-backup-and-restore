<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* BaseItem File
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
* BaseItem class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class BaseItem extends Entity
{
    /**
    * Gets the createdBy
    * Identity of the user, device, or application which created the item. Read-only.
    *
    * @return IdentitySet|null The createdBy
    */
    public function getCreatedBy()
    {
        if (array_key_exists("createdBy", $this->_propDict)) {
            if (is_a($this->_propDict["createdBy"], "\Beta\Microsoft\Graph\Model\IdentitySet") || is_null($this->_propDict["createdBy"])) {
                return $this->_propDict["createdBy"];
            } else {
                $this->_propDict["createdBy"] = new IdentitySet($this->_propDict["createdBy"]);
                return $this->_propDict["createdBy"];
            }
        }
        return null;
    }

    /**
    * Sets the createdBy
    * Identity of the user, device, or application which created the item. Read-only.
    *
    * @param IdentitySet $val The createdBy
    *
    * @return BaseItem
    */
    public function setCreatedBy($val)
    {
        $this->_propDict["createdBy"] = $val;
        return $this;
    }

    /**
    * Gets the createdDateTime
    * Date and time of item creation. Read-only.
    *
    * @return \DateTime|null The createdDateTime
    */
    public function getCreatedDateTime()
    {
        if (array_key_exists("createdDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["createdDateTime"], "\DateTime") || is_null($this->_propDict["createdDateTime"])) {
                return $this->_propDict["createdDateTime"];
            } else {
                $this->_propDict["createdDateTime"] = new \DateTime($this->_propDict["createdDateTime"]);
                return $this->_propDict["createdDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the createdDateTime
    * Date and time of item creation. Read-only.
    *
    * @param \DateTime $val The createdDateTime
    *
    * @return BaseItem
    */
    public function setCreatedDateTime($val)
    {
        $this->_propDict["createdDateTime"] = $val;
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
    * @return BaseItem
    */
    public function setDescription($val)
    {
        $this->_propDict["description"] = $val;
        return $this;
    }

    /**
    * Gets the eTag
    * ETag for the item. Read-only.
    *
    * @return string|null The eTag
    */
    public function getETag()
    {
        if (array_key_exists("eTag", $this->_propDict)) {
            return $this->_propDict["eTag"];
        } else {
            return null;
        }
    }

    /**
    * Sets the eTag
    * ETag for the item. Read-only.
    *
    * @param string $val The eTag
    *
    * @return BaseItem
    */
    public function setETag($val)
    {
        $this->_propDict["eTag"] = $val;
        return $this;
    }

    /**
    * Gets the lastModifiedBy
    * Identity of the user, device, and application which last modified the item. Read-only.
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
    * Identity of the user, device, and application which last modified the item. Read-only.
    *
    * @param IdentitySet $val The lastModifiedBy
    *
    * @return BaseItem
    */
    public function setLastModifiedBy($val)
    {
        $this->_propDict["lastModifiedBy"] = $val;
        return $this;
    }

    /**
    * Gets the lastModifiedDateTime
    * Date and time the item was last modified. Read-only.
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
    * Date and time the item was last modified. Read-only.
    *
    * @param \DateTime $val The lastModifiedDateTime
    *
    * @return BaseItem
    */
    public function setLastModifiedDateTime($val)
    {
        $this->_propDict["lastModifiedDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the name
    * The name of the item. Read-write.
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
    * The name of the item. Read-write.
    *
    * @param string $val The name
    *
    * @return BaseItem
    */
    public function setName($val)
    {
        $this->_propDict["name"] = $val;
        return $this;
    }

    /**
    * Gets the parentReference
    * Parent information, if the item has a parent. Read-write.
    *
    * @return ItemReference|null The parentReference
    */
    public function getParentReference()
    {
        if (array_key_exists("parentReference", $this->_propDict)) {
            if (is_a($this->_propDict["parentReference"], "\Beta\Microsoft\Graph\Model\ItemReference") || is_null($this->_propDict["parentReference"])) {
                return $this->_propDict["parentReference"];
            } else {
                $this->_propDict["parentReference"] = new ItemReference($this->_propDict["parentReference"]);
                return $this->_propDict["parentReference"];
            }
        }
        return null;
    }

    /**
    * Sets the parentReference
    * Parent information, if the item has a parent. Read-write.
    *
    * @param ItemReference $val The parentReference
    *
    * @return BaseItem
    */
    public function setParentReference($val)
    {
        $this->_propDict["parentReference"] = $val;
        return $this;
    }

    /**
    * Gets the webUrl
    * URL that displays the resource in the browser. Read-only.
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
    * URL that displays the resource in the browser. Read-only.
    *
    * @param string $val The webUrl
    *
    * @return BaseItem
    */
    public function setWebUrl($val)
    {
        $this->_propDict["webUrl"] = $val;
        return $this;
    }

    /**
    * Gets the createdByUser
    *
    * @return User|null The createdByUser
    */
    public function getCreatedByUser()
    {
        if (array_key_exists("createdByUser", $this->_propDict)) {
            if (is_a($this->_propDict["createdByUser"], "\Beta\Microsoft\Graph\Model\User") || is_null($this->_propDict["createdByUser"])) {
                return $this->_propDict["createdByUser"];
            } else {
                $this->_propDict["createdByUser"] = new User($this->_propDict["createdByUser"]);
                return $this->_propDict["createdByUser"];
            }
        }
        return null;
    }

    /**
    * Sets the createdByUser
    *
    * @param User $val The createdByUser
    *
    * @return BaseItem
    */
    public function setCreatedByUser($val)
    {
        $this->_propDict["createdByUser"] = $val;
        return $this;
    }

    /**
    * Gets the lastModifiedByUser
    *
    * @return User|null The lastModifiedByUser
    */
    public function getLastModifiedByUser()
    {
        if (array_key_exists("lastModifiedByUser", $this->_propDict)) {
            if (is_a($this->_propDict["lastModifiedByUser"], "\Beta\Microsoft\Graph\Model\User") || is_null($this->_propDict["lastModifiedByUser"])) {
                return $this->_propDict["lastModifiedByUser"];
            } else {
                $this->_propDict["lastModifiedByUser"] = new User($this->_propDict["lastModifiedByUser"]);
                return $this->_propDict["lastModifiedByUser"];
            }
        }
        return null;
    }

    /**
    * Sets the lastModifiedByUser
    *
    * @param User $val The lastModifiedByUser
    *
    * @return BaseItem
    */
    public function setLastModifiedByUser($val)
    {
        $this->_propDict["lastModifiedByUser"] = $val;
        return $this;
    }

}
