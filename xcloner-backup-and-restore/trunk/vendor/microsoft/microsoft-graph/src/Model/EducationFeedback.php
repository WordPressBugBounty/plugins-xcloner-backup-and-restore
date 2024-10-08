<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* EducationFeedback File
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
* EducationFeedback class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class EducationFeedback extends Entity
{

    /**
    * Gets the feedbackBy
    * User who created the feedback.
    *
    * @return IdentitySet|null The feedbackBy
    */
    public function getFeedbackBy()
    {
        if (array_key_exists("feedbackBy", $this->_propDict)) {
            if (is_a($this->_propDict["feedbackBy"], "\Microsoft\Graph\Model\IdentitySet") || is_null($this->_propDict["feedbackBy"])) {
                return $this->_propDict["feedbackBy"];
            } else {
                $this->_propDict["feedbackBy"] = new IdentitySet($this->_propDict["feedbackBy"]);
                return $this->_propDict["feedbackBy"];
            }
        }
        return null;
    }

    /**
    * Sets the feedbackBy
    * User who created the feedback.
    *
    * @param IdentitySet $val The value to assign to the feedbackBy
    *
    * @return EducationFeedback The EducationFeedback
    */
    public function setFeedbackBy($val)
    {
        $this->_propDict["feedbackBy"] = $val;
         return $this;
    }

    /**
    * Gets the feedbackDateTime
    * Moment in time when the feedback was given. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
    *
    * @return \DateTime|null The feedbackDateTime
    */
    public function getFeedbackDateTime()
    {
        if (array_key_exists("feedbackDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["feedbackDateTime"], "\DateTime") || is_null($this->_propDict["feedbackDateTime"])) {
                return $this->_propDict["feedbackDateTime"];
            } else {
                $this->_propDict["feedbackDateTime"] = new \DateTime($this->_propDict["feedbackDateTime"]);
                return $this->_propDict["feedbackDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the feedbackDateTime
    * Moment in time when the feedback was given. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
    *
    * @param \DateTime $val The value to assign to the feedbackDateTime
    *
    * @return EducationFeedback The EducationFeedback
    */
    public function setFeedbackDateTime($val)
    {
        $this->_propDict["feedbackDateTime"] = $val;
         return $this;
    }

    /**
    * Gets the text
    * Feedback.
    *
    * @return EducationItemBody|null The text
    */
    public function getText()
    {
        if (array_key_exists("text", $this->_propDict)) {
            if (is_a($this->_propDict["text"], "\Microsoft\Graph\Model\EducationItemBody") || is_null($this->_propDict["text"])) {
                return $this->_propDict["text"];
            } else {
                $this->_propDict["text"] = new EducationItemBody($this->_propDict["text"]);
                return $this->_propDict["text"];
            }
        }
        return null;
    }

    /**
    * Sets the text
    * Feedback.
    *
    * @param EducationItemBody $val The value to assign to the text
    *
    * @return EducationFeedback The EducationFeedback
    */
    public function setText($val)
    {
        $this->_propDict["text"] = $val;
         return $this;
    }
}
