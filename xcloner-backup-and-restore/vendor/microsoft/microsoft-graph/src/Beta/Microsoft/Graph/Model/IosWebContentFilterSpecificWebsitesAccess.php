<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* IosWebContentFilterSpecificWebsitesAccess File
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
* IosWebContentFilterSpecificWebsitesAccess class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class IosWebContentFilterSpecificWebsitesAccess extends IosWebContentFilterBase
{
    /**
    * Set the @odata.type since this type is immediately descended from an abstract
    * type that is referenced as the type in an entity.
    * @param array $propDict The property dictionary
    */
    public function __construct($propDict = array())
    {
        parent::__construct($propDict);
        $this->setODataType("#microsoft.graph.iosWebContentFilterSpecificWebsitesAccess");
    }


    /**
    * Gets the specificWebsitesOnly
    * URL bookmarks which will be installed into built-in browser and user is only allowed to access websites through bookmarks. This collection can contain a maximum of 500 elements.
    *
    * @return IosBookmark|null The specificWebsitesOnly
    */
    public function getSpecificWebsitesOnly()
    {
        if (array_key_exists("specificWebsitesOnly", $this->_propDict)) {
            if (is_a($this->_propDict["specificWebsitesOnly"], "\Beta\Microsoft\Graph\Model\IosBookmark") || is_null($this->_propDict["specificWebsitesOnly"])) {
                return $this->_propDict["specificWebsitesOnly"];
            } else {
                $this->_propDict["specificWebsitesOnly"] = new IosBookmark($this->_propDict["specificWebsitesOnly"]);
                return $this->_propDict["specificWebsitesOnly"];
            }
        }
        return null;
    }

    /**
    * Sets the specificWebsitesOnly
    * URL bookmarks which will be installed into built-in browser and user is only allowed to access websites through bookmarks. This collection can contain a maximum of 500 elements.
    *
    * @param IosBookmark $val The value to assign to the specificWebsitesOnly
    *
    * @return IosWebContentFilterSpecificWebsitesAccess The IosWebContentFilterSpecificWebsitesAccess
    */
    public function setSpecificWebsitesOnly($val)
    {
        $this->_propDict["specificWebsitesOnly"] = $val;
         return $this;
    }

    /**
    * Gets the websiteList
    * URL bookmarks which will be installed into built-in browser and user is only allowed to access websites through bookmarks. This collection can contain a maximum of 500 elements.
    *
    * @return IosBookmark|null The websiteList
    */
    public function getWebsiteList()
    {
        if (array_key_exists("websiteList", $this->_propDict)) {
            if (is_a($this->_propDict["websiteList"], "\Beta\Microsoft\Graph\Model\IosBookmark") || is_null($this->_propDict["websiteList"])) {
                return $this->_propDict["websiteList"];
            } else {
                $this->_propDict["websiteList"] = new IosBookmark($this->_propDict["websiteList"]);
                return $this->_propDict["websiteList"];
            }
        }
        return null;
    }

    /**
    * Sets the websiteList
    * URL bookmarks which will be installed into built-in browser and user is only allowed to access websites through bookmarks. This collection can contain a maximum of 500 elements.
    *
    * @param IosBookmark $val The value to assign to the websiteList
    *
    * @return IosWebContentFilterSpecificWebsitesAccess The IosWebContentFilterSpecificWebsitesAccess
    */
    public function setWebsiteList($val)
    {
        $this->_propDict["websiteList"] = $val;
         return $this;
    }
}
