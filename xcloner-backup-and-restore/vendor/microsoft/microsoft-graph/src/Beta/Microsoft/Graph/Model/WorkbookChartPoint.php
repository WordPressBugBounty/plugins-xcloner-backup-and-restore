<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WorkbookChartPoint File
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
* WorkbookChartPoint class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class WorkbookChartPoint extends Entity
{
    /**
    * Gets the value
    * Returns the value of a chart point. Read-only.
    *
    * @return string|null The value
    */
    public function getValue()
    {
        if (array_key_exists("value", $this->_propDict)) {
            return $this->_propDict["value"];
        } else {
            return null;
        }
    }

    /**
    * Sets the value
    * Returns the value of a chart point. Read-only.
    *
    * @param string $val The value
    *
    * @return WorkbookChartPoint
    */
    public function setValue($val)
    {
        $this->_propDict["value"] = $val;
        return $this;
    }

    /**
    * Gets the format
    * Encapsulates the format properties chart point. Read-only.
    *
    * @return WorkbookChartPointFormat|null The format
    */
    public function getFormat()
    {
        if (array_key_exists("format", $this->_propDict)) {
            if (is_a($this->_propDict["format"], "\Beta\Microsoft\Graph\Model\WorkbookChartPointFormat") || is_null($this->_propDict["format"])) {
                return $this->_propDict["format"];
            } else {
                $this->_propDict["format"] = new WorkbookChartPointFormat($this->_propDict["format"]);
                return $this->_propDict["format"];
            }
        }
        return null;
    }

    /**
    * Sets the format
    * Encapsulates the format properties chart point. Read-only.
    *
    * @param WorkbookChartPointFormat $val The format
    *
    * @return WorkbookChartPoint
    */
    public function setFormat($val)
    {
        $this->_propDict["format"] = $val;
        return $this;
    }

}
