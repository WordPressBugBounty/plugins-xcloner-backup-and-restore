<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AccessPackageAnswerChoice File
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
* AccessPackageAnswerChoice class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AccessPackageAnswerChoice extends Entity
{
    /**
    * Gets the actualValue
    * The actual value of the selected choice. This is typically a string value which is understandable by applications. Required.
    *
    * @return string|null The actualValue
    */
    public function getActualValue()
    {
        if (array_key_exists("actualValue", $this->_propDict)) {
            return $this->_propDict["actualValue"];
        } else {
            return null;
        }
    }

    /**
    * Sets the actualValue
    * The actual value of the selected choice. This is typically a string value which is understandable by applications. Required.
    *
    * @param string $val The value of the actualValue
    *
    * @return AccessPackageAnswerChoice
    */
    public function setActualValue($val)
    {
        $this->_propDict["actualValue"] = $val;
        return $this;
    }

    /**
    * Gets the displayValue
    * The localized display values shown to the requestor and approvers. Required.
    *
    * @return AccessPackageLocalizedContent|null The displayValue
    */
    public function getDisplayValue()
    {
        if (array_key_exists("displayValue", $this->_propDict)) {
            if (is_a($this->_propDict["displayValue"], "\Beta\Microsoft\Graph\Model\AccessPackageLocalizedContent") || is_null($this->_propDict["displayValue"])) {
                return $this->_propDict["displayValue"];
            } else {
                $this->_propDict["displayValue"] = new AccessPackageLocalizedContent($this->_propDict["displayValue"]);
                return $this->_propDict["displayValue"];
            }
        }
        return null;
    }

    /**
    * Sets the displayValue
    * The localized display values shown to the requestor and approvers. Required.
    *
    * @param AccessPackageLocalizedContent $val The value to assign to the displayValue
    *
    * @return AccessPackageAnswerChoice The AccessPackageAnswerChoice
    */
    public function setDisplayValue($val)
    {
        $this->_propDict["displayValue"] = $val;
         return $this;
    }
}
