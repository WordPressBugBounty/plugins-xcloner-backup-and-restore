<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PlannerPlanContextDetails File
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
* PlannerPlanContextDetails class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class PlannerPlanContextDetails extends Entity
{
    /**
    * Gets the customLinkText
    * Nullable. Specifies the text to use in a user experience to display a link the the associated plannerPlanContext. If null, applications should display the link with a custom text based on the displayLinkType property.
    *
    * @return string|null The customLinkText
    */
    public function getCustomLinkText()
    {
        if (array_key_exists("customLinkText", $this->_propDict)) {
            return $this->_propDict["customLinkText"];
        } else {
            return null;
        }
    }

    /**
    * Sets the customLinkText
    * Nullable. Specifies the text to use in a user experience to display a link the the associated plannerPlanContext. If null, applications should display the link with a custom text based on the displayLinkType property.
    *
    * @param string $val The value of the customLinkText
    *
    * @return PlannerPlanContextDetails
    */
    public function setCustomLinkText($val)
    {
        $this->_propDict["customLinkText"] = $val;
        return $this;
    }

    /**
    * Gets the displayLinkType
    * Specifies how an application should display the link to the associated plannerPlanContext. Applications may choose to provide customized text, description, icons, or other experiences based on the type of the link. Possible values are: teamsTab, sharePointPage, meetingNotes, other, unknownFutureValue.
    *
    * @return PlannerPlanContextType|null The displayLinkType
    */
    public function getDisplayLinkType()
    {
        if (array_key_exists("displayLinkType", $this->_propDict)) {
            if (is_a($this->_propDict["displayLinkType"], "\Beta\Microsoft\Graph\Model\PlannerPlanContextType") || is_null($this->_propDict["displayLinkType"])) {
                return $this->_propDict["displayLinkType"];
            } else {
                $this->_propDict["displayLinkType"] = new PlannerPlanContextType($this->_propDict["displayLinkType"]);
                return $this->_propDict["displayLinkType"];
            }
        }
        return null;
    }

    /**
    * Sets the displayLinkType
    * Specifies how an application should display the link to the associated plannerPlanContext. Applications may choose to provide customized text, description, icons, or other experiences based on the type of the link. Possible values are: teamsTab, sharePointPage, meetingNotes, other, unknownFutureValue.
    *
    * @param PlannerPlanContextType $val The value to assign to the displayLinkType
    *
    * @return PlannerPlanContextDetails The PlannerPlanContextDetails
    */
    public function setDisplayLinkType($val)
    {
        $this->_propDict["displayLinkType"] = $val;
         return $this;
    }

    /**
    * Gets the state
    * Indicates the state of the associated plannerPlanContext.
    *
    * @return PlannerContextState|null The state
    */
    public function getState()
    {
        if (array_key_exists("state", $this->_propDict)) {
            if (is_a($this->_propDict["state"], "\Beta\Microsoft\Graph\Model\PlannerContextState") || is_null($this->_propDict["state"])) {
                return $this->_propDict["state"];
            } else {
                $this->_propDict["state"] = new PlannerContextState($this->_propDict["state"]);
                return $this->_propDict["state"];
            }
        }
        return null;
    }

    /**
    * Sets the state
    * Indicates the state of the associated plannerPlanContext.
    *
    * @param PlannerContextState $val The value to assign to the state
    *
    * @return PlannerPlanContextDetails The PlannerPlanContextDetails
    */
    public function setState($val)
    {
        $this->_propDict["state"] = $val;
         return $this;
    }
    /**
    * Gets the url
    * URL of the user experience represented by the associated plannerPlanContext.
    *
    * @return string|null The url
    */
    public function getUrl()
    {
        if (array_key_exists("url", $this->_propDict)) {
            return $this->_propDict["url"];
        } else {
            return null;
        }
    }

    /**
    * Sets the url
    * URL of the user experience represented by the associated plannerPlanContext.
    *
    * @param string $val The value of the url
    *
    * @return PlannerPlanContextDetails
    */
    public function setUrl($val)
    {
        $this->_propDict["url"] = $val;
        return $this;
    }
}
