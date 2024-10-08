<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* CaseSettings File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\Ediscovery\Model;

if (!defined('ABSPATH') && PHP_SAPI !== 'cli') { die(); }


/**
* CaseSettings class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class CaseSettings extends \Beta\Microsoft\Graph\Model\Entity
{
    /**
    * Gets the ocr
    * The OCR (Optical Character Recognition) settings for the case.
    *
    * @return OcrSettings|null The ocr
    */
    public function getOcr()
    {
        if (array_key_exists("ocr", $this->_propDict)) {
            if (is_a($this->_propDict["ocr"], "\Beta\Microsoft\Graph\Ediscovery\Model\OcrSettings") || is_null($this->_propDict["ocr"])) {
                return $this->_propDict["ocr"];
            } else {
                $this->_propDict["ocr"] = new OcrSettings($this->_propDict["ocr"]);
                return $this->_propDict["ocr"];
            }
        }
        return null;
    }

    /**
    * Sets the ocr
    * The OCR (Optical Character Recognition) settings for the case.
    *
    * @param OcrSettings $val The ocr
    *
    * @return CaseSettings
    */
    public function setOcr($val)
    {
        $this->_propDict["ocr"] = $val;
        return $this;
    }

    /**
    * Gets the redundancyDetection
    * The redundancy (near duplicate and email threading) detection settings for the case.
    *
    * @return RedundancyDetectionSettings|null The redundancyDetection
    */
    public function getRedundancyDetection()
    {
        if (array_key_exists("redundancyDetection", $this->_propDict)) {
            if (is_a($this->_propDict["redundancyDetection"], "\Beta\Microsoft\Graph\Ediscovery\Model\RedundancyDetectionSettings") || is_null($this->_propDict["redundancyDetection"])) {
                return $this->_propDict["redundancyDetection"];
            } else {
                $this->_propDict["redundancyDetection"] = new RedundancyDetectionSettings($this->_propDict["redundancyDetection"]);
                return $this->_propDict["redundancyDetection"];
            }
        }
        return null;
    }

    /**
    * Sets the redundancyDetection
    * The redundancy (near duplicate and email threading) detection settings for the case.
    *
    * @param RedundancyDetectionSettings $val The redundancyDetection
    *
    * @return CaseSettings
    */
    public function setRedundancyDetection($val)
    {
        $this->_propDict["redundancyDetection"] = $val;
        return $this;
    }

    /**
    * Gets the topicModeling
    * The Topic Modeling (Themes) settings for the case.
    *
    * @return TopicModelingSettings|null The topicModeling
    */
    public function getTopicModeling()
    {
        if (array_key_exists("topicModeling", $this->_propDict)) {
            if (is_a($this->_propDict["topicModeling"], "\Beta\Microsoft\Graph\Ediscovery\Model\TopicModelingSettings") || is_null($this->_propDict["topicModeling"])) {
                return $this->_propDict["topicModeling"];
            } else {
                $this->_propDict["topicModeling"] = new TopicModelingSettings($this->_propDict["topicModeling"]);
                return $this->_propDict["topicModeling"];
            }
        }
        return null;
    }

    /**
    * Sets the topicModeling
    * The Topic Modeling (Themes) settings for the case.
    *
    * @param TopicModelingSettings $val The topicModeling
    *
    * @return CaseSettings
    */
    public function setTopicModeling($val)
    {
        $this->_propDict["topicModeling"] = $val;
        return $this;
    }

}
