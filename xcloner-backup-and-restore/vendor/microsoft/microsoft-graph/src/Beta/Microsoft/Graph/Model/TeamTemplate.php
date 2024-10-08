<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* TeamTemplate File
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
* TeamTemplate class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class TeamTemplate extends Entity
{

     /**
     * Gets the definitions
     *
     * @return array|null The definitions
     */
    public function getDefinitions()
    {
        if (array_key_exists("definitions", $this->_propDict)) {
           return $this->_propDict["definitions"];
        } else {
            return null;
        }
    }

    /**
    * Sets the definitions
    *
    * @param TeamTemplateDefinition[] $val The definitions
    *
    * @return TeamTemplate
    */
    public function setDefinitions($val)
    {
        $this->_propDict["definitions"] = $val;
        return $this;
    }

}
