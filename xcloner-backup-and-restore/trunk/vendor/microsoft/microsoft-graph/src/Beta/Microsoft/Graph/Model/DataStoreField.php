<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DataStoreField File
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
* DataStoreField class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DataStoreField extends Entity
{
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
    * @return DataStoreField
    */
    public function setName($val)
    {
        $this->_propDict["name"] = $val;
        return $this;
    }
    /**
    * Gets the searchable
    *
    * @return bool|null The searchable
    */
    public function getSearchable()
    {
        if (array_key_exists("searchable", $this->_propDict)) {
            return $this->_propDict["searchable"];
        } else {
            return null;
        }
    }

    /**
    * Sets the searchable
    *
    * @param bool $val The value of the searchable
    *
    * @return DataStoreField
    */
    public function setSearchable($val)
    {
        $this->_propDict["searchable"] = $val;
        return $this;
    }
    /**
    * Gets the unique
    *
    * @return bool|null The unique
    */
    public function getUnique()
    {
        if (array_key_exists("unique", $this->_propDict)) {
            return $this->_propDict["unique"];
        } else {
            return null;
        }
    }

    /**
    * Sets the unique
    *
    * @param bool $val The value of the unique
    *
    * @return DataStoreField
    */
    public function setUnique($val)
    {
        $this->_propDict["unique"] = $val;
        return $this;
    }
}
