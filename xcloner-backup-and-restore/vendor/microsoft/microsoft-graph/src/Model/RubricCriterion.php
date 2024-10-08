<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* RubricCriterion File
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
* RubricCriterion class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class RubricCriterion extends Entity
{

    /**
    * Gets the description
    * The description of this criterion.
    *
    * @return EducationItemBody|null The description
    */
    public function getDescription()
    {
        if (array_key_exists("description", $this->_propDict)) {
            if (is_a($this->_propDict["description"], "\Microsoft\Graph\Model\EducationItemBody") || is_null($this->_propDict["description"])) {
                return $this->_propDict["description"];
            } else {
                $this->_propDict["description"] = new EducationItemBody($this->_propDict["description"]);
                return $this->_propDict["description"];
            }
        }
        return null;
    }

    /**
    * Sets the description
    * The description of this criterion.
    *
    * @param EducationItemBody $val The value to assign to the description
    *
    * @return RubricCriterion The RubricCriterion
    */
    public function setDescription($val)
    {
        $this->_propDict["description"] = $val;
         return $this;
    }
}
