<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WorkbookFilter File
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
* WorkbookFilter class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class WorkbookFilter extends Entity
{
    /**
    * Gets the criteria
    *
    * @return WorkbookFilterCriteria|null The criteria
    */
    public function getCriteria()
    {
        if (array_key_exists("criteria", $this->_propDict)) {
            if (is_a($this->_propDict["criteria"], "\Beta\Microsoft\Graph\Model\WorkbookFilterCriteria") || is_null($this->_propDict["criteria"])) {
                return $this->_propDict["criteria"];
            } else {
                $this->_propDict["criteria"] = new WorkbookFilterCriteria($this->_propDict["criteria"]);
                return $this->_propDict["criteria"];
            }
        }
        return null;
    }

    /**
    * Sets the criteria
    *
    * @param WorkbookFilterCriteria $val The criteria
    *
    * @return WorkbookFilter
    */
    public function setCriteria($val)
    {
        $this->_propDict["criteria"] = $val;
        return $this;
    }

}
