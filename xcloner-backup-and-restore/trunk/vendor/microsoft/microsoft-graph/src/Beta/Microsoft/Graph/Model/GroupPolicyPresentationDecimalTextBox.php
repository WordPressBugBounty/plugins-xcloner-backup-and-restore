<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* GroupPolicyPresentationDecimalTextBox File
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
* GroupPolicyPresentationDecimalTextBox class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class GroupPolicyPresentationDecimalTextBox extends GroupPolicyUploadedPresentation
{
    /**
    * Gets the defaultValue
    * An unsigned integer that specifies the initial value for the decimal text box. The default value is 1.
    *
    * @return int|null The defaultValue
    */
    public function getDefaultValue()
    {
        if (array_key_exists("defaultValue", $this->_propDict)) {
            return $this->_propDict["defaultValue"];
        } else {
            return null;
        }
    }

    /**
    * Sets the defaultValue
    * An unsigned integer that specifies the initial value for the decimal text box. The default value is 1.
    *
    * @param int $val The defaultValue
    *
    * @return GroupPolicyPresentationDecimalTextBox
    */
    public function setDefaultValue($val)
    {
        $this->_propDict["defaultValue"] = intval($val);
        return $this;
    }

    /**
    * Gets the maxValue
    * An unsigned integer that specifies the maximum allowed value. The default value is 9999.
    *
    * @return int|null The maxValue
    */
    public function getMaxValue()
    {
        if (array_key_exists("maxValue", $this->_propDict)) {
            return $this->_propDict["maxValue"];
        } else {
            return null;
        }
    }

    /**
    * Sets the maxValue
    * An unsigned integer that specifies the maximum allowed value. The default value is 9999.
    *
    * @param int $val The maxValue
    *
    * @return GroupPolicyPresentationDecimalTextBox
    */
    public function setMaxValue($val)
    {
        $this->_propDict["maxValue"] = intval($val);
        return $this;
    }

    /**
    * Gets the minValue
    * An unsigned integer that specifies the minimum allowed value. The default value is 0.
    *
    * @return int|null The minValue
    */
    public function getMinValue()
    {
        if (array_key_exists("minValue", $this->_propDict)) {
            return $this->_propDict["minValue"];
        } else {
            return null;
        }
    }

    /**
    * Sets the minValue
    * An unsigned integer that specifies the minimum allowed value. The default value is 0.
    *
    * @param int $val The minValue
    *
    * @return GroupPolicyPresentationDecimalTextBox
    */
    public function setMinValue($val)
    {
        $this->_propDict["minValue"] = intval($val);
        return $this;
    }

    /**
    * Gets the required
    * Requirement to enter a value in the parameter box. The default value is false.
    *
    * @return bool|null The required
    */
    public function getRequired()
    {
        if (array_key_exists("required", $this->_propDict)) {
            return $this->_propDict["required"];
        } else {
            return null;
        }
    }

    /**
    * Sets the required
    * Requirement to enter a value in the parameter box. The default value is false.
    *
    * @param bool $val The required
    *
    * @return GroupPolicyPresentationDecimalTextBox
    */
    public function setRequired($val)
    {
        $this->_propDict["required"] = boolval($val);
        return $this;
    }

    /**
    * Gets the spin
    * If true, create a spin control; otherwise, create a text box for numeric entry. The default value is true.
    *
    * @return bool|null The spin
    */
    public function getSpin()
    {
        if (array_key_exists("spin", $this->_propDict)) {
            return $this->_propDict["spin"];
        } else {
            return null;
        }
    }

    /**
    * Sets the spin
    * If true, create a spin control; otherwise, create a text box for numeric entry. The default value is true.
    *
    * @param bool $val The spin
    *
    * @return GroupPolicyPresentationDecimalTextBox
    */
    public function setSpin($val)
    {
        $this->_propDict["spin"] = boolval($val);
        return $this;
    }

    /**
    * Gets the spinStep
    * An unsigned integer that specifies the increment of change for the spin control. The default value is 1.
    *
    * @return int|null The spinStep
    */
    public function getSpinStep()
    {
        if (array_key_exists("spinStep", $this->_propDict)) {
            return $this->_propDict["spinStep"];
        } else {
            return null;
        }
    }

    /**
    * Sets the spinStep
    * An unsigned integer that specifies the increment of change for the spin control. The default value is 1.
    *
    * @param int $val The spinStep
    *
    * @return GroupPolicyPresentationDecimalTextBox
    */
    public function setSpinStep($val)
    {
        $this->_propDict["spinStep"] = intval($val);
        return $this;
    }

}
