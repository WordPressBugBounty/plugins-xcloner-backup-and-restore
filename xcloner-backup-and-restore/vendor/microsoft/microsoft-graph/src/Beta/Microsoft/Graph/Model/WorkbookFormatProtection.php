<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WorkbookFormatProtection File
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
* WorkbookFormatProtection class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class WorkbookFormatProtection extends Entity
{
    /**
    * Gets the formulaHidden
    *
    * @return bool|null The formulaHidden
    */
    public function getFormulaHidden()
    {
        if (array_key_exists("formulaHidden", $this->_propDict)) {
            return $this->_propDict["formulaHidden"];
        } else {
            return null;
        }
    }

    /**
    * Sets the formulaHidden
    *
    * @param bool $val The formulaHidden
    *
    * @return WorkbookFormatProtection
    */
    public function setFormulaHidden($val)
    {
        $this->_propDict["formulaHidden"] = boolval($val);
        return $this;
    }

    /**
    * Gets the locked
    *
    * @return bool|null The locked
    */
    public function getLocked()
    {
        if (array_key_exists("locked", $this->_propDict)) {
            return $this->_propDict["locked"];
        } else {
            return null;
        }
    }

    /**
    * Sets the locked
    *
    * @param bool $val The locked
    *
    * @return WorkbookFormatProtection
    */
    public function setLocked($val)
    {
        $this->_propDict["locked"] = boolval($val);
        return $this;
    }

}
