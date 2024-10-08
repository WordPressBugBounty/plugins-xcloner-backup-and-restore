<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* MediaSource File
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
* MediaSource class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class MediaSource extends Entity
{

    /**
    * Gets the contentCategory
    * Enumeration value that indicates the media content category.
    *
    * @return MediaSourceContentCategory|null The contentCategory
    */
    public function getContentCategory()
    {
        if (array_key_exists("contentCategory", $this->_propDict)) {
            if (is_a($this->_propDict["contentCategory"], "\Beta\Microsoft\Graph\Model\MediaSourceContentCategory") || is_null($this->_propDict["contentCategory"])) {
                return $this->_propDict["contentCategory"];
            } else {
                $this->_propDict["contentCategory"] = new MediaSourceContentCategory($this->_propDict["contentCategory"]);
                return $this->_propDict["contentCategory"];
            }
        }
        return null;
    }

    /**
    * Sets the contentCategory
    * Enumeration value that indicates the media content category.
    *
    * @param MediaSourceContentCategory $val The value to assign to the contentCategory
    *
    * @return MediaSource The MediaSource
    */
    public function setContentCategory($val)
    {
        $this->_propDict["contentCategory"] = $val;
         return $this;
    }
}
