<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ThreatAssessmentRequestsCount File
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
* ThreatAssessmentRequestsCount class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ThreatAssessmentRequestsCount extends Entity
{
    /**
    * Gets the count
    *
    * @return int|null The count
    */
    public function getCount()
    {
        if (array_key_exists("count", $this->_propDict)) {
            return $this->_propDict["count"];
        } else {
            return null;
        }
    }

    /**
    * Sets the count
    *
    * @param int $val The value of the count
    *
    * @return ThreatAssessmentRequestsCount
    */
    public function setCount($val)
    {
        $this->_propDict["count"] = $val;
        return $this;
    }

    /**
    * Gets the createdDateTime
    *
    * @return \DateTime|null The createdDateTime
    */
    public function getCreatedDateTime()
    {
        if (array_key_exists("createdDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["createdDateTime"], "\DateTime") || is_null($this->_propDict["createdDateTime"])) {
                return $this->_propDict["createdDateTime"];
            } else {
                $this->_propDict["createdDateTime"] = new \DateTime($this->_propDict["createdDateTime"]);
                return $this->_propDict["createdDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the createdDateTime
    *
    * @param \DateTime $val The value to assign to the createdDateTime
    *
    * @return ThreatAssessmentRequestsCount The ThreatAssessmentRequestsCount
    */
    public function setCreatedDateTime($val)
    {
        $this->_propDict["createdDateTime"] = $val;
         return $this;
    }
    /**
    * Gets the pivotValue
    *
    * @return string|null The pivotValue
    */
    public function getPivotValue()
    {
        if (array_key_exists("pivotValue", $this->_propDict)) {
            return $this->_propDict["pivotValue"];
        } else {
            return null;
        }
    }

    /**
    * Sets the pivotValue
    *
    * @param string $val The value of the pivotValue
    *
    * @return ThreatAssessmentRequestsCount
    */
    public function setPivotValue($val)
    {
        $this->_propDict["pivotValue"] = $val;
        return $this;
    }
}
