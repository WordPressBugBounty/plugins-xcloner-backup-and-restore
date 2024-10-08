<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* BaseItemVersion File
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
* BaseItemVersion class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class BaseItemVersion extends Entity
{
    /**
    * Gets the lastModifiedBy
    * Identity of the user which last modified the version. Read-only.
    *
    * @return IdentitySet|null The lastModifiedBy
    */
    public function getLastModifiedBy()
    {
        if (array_key_exists("lastModifiedBy", $this->_propDict)) {
            if (is_a($this->_propDict["lastModifiedBy"], "\Microsoft\Graph\Model\IdentitySet") || is_null($this->_propDict["lastModifiedBy"])) {
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
    * Identity of the user which last modified the version. Read-only.
    *
    * @param IdentitySet $val The lastModifiedBy
    *
    * @return BaseItemVersion
    */
    public function setLastModifiedBy($val)
    {
        $this->_propDict["lastModifiedBy"] = $val;
        return $this;
    }

    /**
    * Gets the lastModifiedDateTime
    * Date and time the version was last modified. Read-only.
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
    * Date and time the version was last modified. Read-only.
    *
    * @param \DateTime $val The lastModifiedDateTime
    *
    * @return BaseItemVersion
    */
    public function setLastModifiedDateTime($val)
    {
        $this->_propDict["lastModifiedDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the publication
    * Indicates the publication status of this particular version. Read-only.
    *
    * @return PublicationFacet|null The publication
    */
    public function getPublication()
    {
        if (array_key_exists("publication", $this->_propDict)) {
            if (is_a($this->_propDict["publication"], "\Microsoft\Graph\Model\PublicationFacet") || is_null($this->_propDict["publication"])) {
                return $this->_propDict["publication"];
            } else {
                $this->_propDict["publication"] = new PublicationFacet($this->_propDict["publication"]);
                return $this->_propDict["publication"];
            }
        }
        return null;
    }

    /**
    * Sets the publication
    * Indicates the publication status of this particular version. Read-only.
    *
    * @param PublicationFacet $val The publication
    *
    * @return BaseItemVersion
    */
    public function setPublication($val)
    {
        $this->_propDict["publication"] = $val;
        return $this;
    }

}
