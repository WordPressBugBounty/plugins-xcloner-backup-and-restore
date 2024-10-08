<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* GroupPolicyPresentationCheckBox File
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
* GroupPolicyPresentationCheckBox class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class GroupPolicyPresentationCheckBox extends GroupPolicyUploadedPresentation
{
    /**
    * Gets the defaultChecked
    * Default value for the check box. The default value is false.
    *
    * @return bool|null The defaultChecked
    */
    public function getDefaultChecked()
    {
        if (array_key_exists("defaultChecked", $this->_propDict)) {
            return $this->_propDict["defaultChecked"];
        } else {
            return null;
        }
    }

    /**
    * Sets the defaultChecked
    * Default value for the check box. The default value is false.
    *
    * @param bool $val The defaultChecked
    *
    * @return GroupPolicyPresentationCheckBox
    */
    public function setDefaultChecked($val)
    {
        $this->_propDict["defaultChecked"] = boolval($val);
        return $this;
    }

}
