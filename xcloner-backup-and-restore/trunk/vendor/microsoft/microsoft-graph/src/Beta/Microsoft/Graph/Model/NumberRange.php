<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* NumberRange File
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
* NumberRange class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class NumberRange extends Entity
{
    /**
    * Gets the lowerNumber
    * Lower number.
    *
    * @return int|null The lowerNumber
    */
    public function getLowerNumber()
    {
        if (array_key_exists("lowerNumber", $this->_propDict)) {
            return $this->_propDict["lowerNumber"];
        } else {
            return null;
        }
    }

    /**
    * Sets the lowerNumber
    * Lower number.
    *
    * @param int $val The value of the lowerNumber
    *
    * @return NumberRange
    */
    public function setLowerNumber($val)
    {
        $this->_propDict["lowerNumber"] = $val;
        return $this;
    }
    /**
    * Gets the upperNumber
    * Upper number.
    *
    * @return int|null The upperNumber
    */
    public function getUpperNumber()
    {
        if (array_key_exists("upperNumber", $this->_propDict)) {
            return $this->_propDict["upperNumber"];
        } else {
            return null;
        }
    }

    /**
    * Sets the upperNumber
    * Upper number.
    *
    * @param int $val The value of the upperNumber
    *
    * @return NumberRange
    */
    public function setUpperNumber($val)
    {
        $this->_propDict["upperNumber"] = $val;
        return $this;
    }
}
