<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ItemBody File
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
* ItemBody class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ItemBody extends Entity
{
    /**
    * Gets the content
    * The content of the item.
    *
    * @return string|null The content
    */
    public function getContent()
    {
        if (array_key_exists("content", $this->_propDict)) {
            return $this->_propDict["content"];
        } else {
            return null;
        }
    }

    /**
    * Sets the content
    * The content of the item.
    *
    * @param string $val The value of the content
    *
    * @return ItemBody
    */
    public function setContent($val)
    {
        $this->_propDict["content"] = $val;
        return $this;
    }

    /**
    * Gets the contentType
    * The type of the content. Possible values are text and html.
    *
    * @return BodyType|null The contentType
    */
    public function getContentType()
    {
        if (array_key_exists("contentType", $this->_propDict)) {
            if (is_a($this->_propDict["contentType"], "\Microsoft\Graph\Model\BodyType") || is_null($this->_propDict["contentType"])) {
                return $this->_propDict["contentType"];
            } else {
                $this->_propDict["contentType"] = new BodyType($this->_propDict["contentType"]);
                return $this->_propDict["contentType"];
            }
        }
        return null;
    }

    /**
    * Sets the contentType
    * The type of the content. Possible values are text and html.
    *
    * @param BodyType $val The value to assign to the contentType
    *
    * @return ItemBody The ItemBody
    */
    public function setContentType($val)
    {
        $this->_propDict["contentType"] = $val;
         return $this;
    }
}
