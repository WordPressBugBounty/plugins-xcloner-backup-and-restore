<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PlannerPlanDetails File
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
* PlannerPlanDetails class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class PlannerPlanDetails extends PlannerDelta
{
    /**
    * Gets the categoryDescriptions
    * An object that specifies the descriptions of the 25 categories that can be associated with tasks in the plan
    *
    * @return PlannerCategoryDescriptions|null The categoryDescriptions
    */
    public function getCategoryDescriptions()
    {
        if (array_key_exists("categoryDescriptions", $this->_propDict)) {
            if (is_a($this->_propDict["categoryDescriptions"], "\Beta\Microsoft\Graph\Model\PlannerCategoryDescriptions") || is_null($this->_propDict["categoryDescriptions"])) {
                return $this->_propDict["categoryDescriptions"];
            } else {
                $this->_propDict["categoryDescriptions"] = new PlannerCategoryDescriptions($this->_propDict["categoryDescriptions"]);
                return $this->_propDict["categoryDescriptions"];
            }
        }
        return null;
    }

    /**
    * Sets the categoryDescriptions
    * An object that specifies the descriptions of the 25 categories that can be associated with tasks in the plan
    *
    * @param PlannerCategoryDescriptions $val The categoryDescriptions
    *
    * @return PlannerPlanDetails
    */
    public function setCategoryDescriptions($val)
    {
        $this->_propDict["categoryDescriptions"] = $val;
        return $this;
    }

    /**
    * Gets the contextDetails
    * Read-only. A collection of additional information associated with plannerPlanContext entries that are defined for the plannerPlan container.
    *
    * @return PlannerPlanContextDetailsCollection|null The contextDetails
    */
    public function getContextDetails()
    {
        if (array_key_exists("contextDetails", $this->_propDict)) {
            if (is_a($this->_propDict["contextDetails"], "\Beta\Microsoft\Graph\Model\PlannerPlanContextDetailsCollection") || is_null($this->_propDict["contextDetails"])) {
                return $this->_propDict["contextDetails"];
            } else {
                $this->_propDict["contextDetails"] = new PlannerPlanContextDetailsCollection($this->_propDict["contextDetails"]);
                return $this->_propDict["contextDetails"];
            }
        }
        return null;
    }

    /**
    * Sets the contextDetails
    * Read-only. A collection of additional information associated with plannerPlanContext entries that are defined for the plannerPlan container.
    *
    * @param PlannerPlanContextDetailsCollection $val The contextDetails
    *
    * @return PlannerPlanDetails
    */
    public function setContextDetails($val)
    {
        $this->_propDict["contextDetails"] = $val;
        return $this;
    }

    /**
    * Gets the sharedWith
    * The set of user IDs that this plan is shared with. If you are using Microsoft 365 groups, use the groups API to manage group membership to share the group's plan. You can also add existing members of the group to this collection, although it is not required in order for them to access the plan owned by the group.
    *
    * @return PlannerUserIds|null The sharedWith
    */
    public function getSharedWith()
    {
        if (array_key_exists("sharedWith", $this->_propDict)) {
            if (is_a($this->_propDict["sharedWith"], "\Beta\Microsoft\Graph\Model\PlannerUserIds") || is_null($this->_propDict["sharedWith"])) {
                return $this->_propDict["sharedWith"];
            } else {
                $this->_propDict["sharedWith"] = new PlannerUserIds($this->_propDict["sharedWith"]);
                return $this->_propDict["sharedWith"];
            }
        }
        return null;
    }

    /**
    * Sets the sharedWith
    * The set of user IDs that this plan is shared with. If you are using Microsoft 365 groups, use the groups API to manage group membership to share the group's plan. You can also add existing members of the group to this collection, although it is not required in order for them to access the plan owned by the group.
    *
    * @param PlannerUserIds $val The sharedWith
    *
    * @return PlannerPlanDetails
    */
    public function setSharedWith($val)
    {
        $this->_propDict["sharedWith"] = $val;
        return $this;
    }

}
