<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* RubricQualityFeedbackModel File
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
* RubricQualityFeedbackModel class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class RubricQualityFeedbackModel extends Entity
{

    /**
    * Gets the feedback
    * Specific feedback for one quality of this rubric.
    *
    * @return EducationItemBody|null The feedback
    */
    public function getFeedback()
    {
        if (array_key_exists("feedback", $this->_propDict)) {
            if (is_a($this->_propDict["feedback"], "\Beta\Microsoft\Graph\Model\EducationItemBody") || is_null($this->_propDict["feedback"])) {
                return $this->_propDict["feedback"];
            } else {
                $this->_propDict["feedback"] = new EducationItemBody($this->_propDict["feedback"]);
                return $this->_propDict["feedback"];
            }
        }
        return null;
    }

    /**
    * Sets the feedback
    * Specific feedback for one quality of this rubric.
    *
    * @param EducationItemBody $val The value to assign to the feedback
    *
    * @return RubricQualityFeedbackModel The RubricQualityFeedbackModel
    */
    public function setFeedback($val)
    {
        $this->_propDict["feedback"] = $val;
         return $this;
    }
    /**
    * Gets the qualityId
    * The ID of the rubricQuality that this feedback is related to.
    *
    * @return string|null The qualityId
    */
    public function getQualityId()
    {
        if (array_key_exists("qualityId", $this->_propDict)) {
            return $this->_propDict["qualityId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the qualityId
    * The ID of the rubricQuality that this feedback is related to.
    *
    * @param string $val The value of the qualityId
    *
    * @return RubricQualityFeedbackModel
    */
    public function setQualityId($val)
    {
        $this->_propDict["qualityId"] = $val;
        return $this;
    }
}
