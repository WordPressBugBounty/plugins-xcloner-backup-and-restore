<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ItemActivity File
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
* ItemActivity class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ItemActivity extends Entity
{
    /**
    * Gets the access
    * An item was accessed.
    *
    * @return AccessAction|null The access
    */
    public function getAccess()
    {
        if (array_key_exists("access", $this->_propDict)) {
            if (is_a($this->_propDict["access"], "\Beta\Microsoft\Graph\Model\AccessAction") || is_null($this->_propDict["access"])) {
                return $this->_propDict["access"];
            } else {
                $this->_propDict["access"] = new AccessAction($this->_propDict["access"]);
                return $this->_propDict["access"];
            }
        }
        return null;
    }

    /**
    * Sets the access
    * An item was accessed.
    *
    * @param AccessAction $val The access
    *
    * @return ItemActivity
    */
    public function setAccess($val)
    {
        $this->_propDict["access"] = $val;
        return $this;
    }

    /**
    * Gets the activityDateTime
    *
    * @return \DateTime|null The activityDateTime
    */
    public function getActivityDateTime()
    {
        if (array_key_exists("activityDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["activityDateTime"], "\DateTime") || is_null($this->_propDict["activityDateTime"])) {
                return $this->_propDict["activityDateTime"];
            } else {
                $this->_propDict["activityDateTime"] = new \DateTime($this->_propDict["activityDateTime"]);
                return $this->_propDict["activityDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the activityDateTime
    *
    * @param \DateTime $val The activityDateTime
    *
    * @return ItemActivity
    */
    public function setActivityDateTime($val)
    {
        $this->_propDict["activityDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the actor
    * Identity of who performed the action. Read-only.
    *
    * @return IdentitySet|null The actor
    */
    public function getActor()
    {
        if (array_key_exists("actor", $this->_propDict)) {
            if (is_a($this->_propDict["actor"], "\Beta\Microsoft\Graph\Model\IdentitySet") || is_null($this->_propDict["actor"])) {
                return $this->_propDict["actor"];
            } else {
                $this->_propDict["actor"] = new IdentitySet($this->_propDict["actor"]);
                return $this->_propDict["actor"];
            }
        }
        return null;
    }

    /**
    * Sets the actor
    * Identity of who performed the action. Read-only.
    *
    * @param IdentitySet $val The actor
    *
    * @return ItemActivity
    */
    public function setActor($val)
    {
        $this->_propDict["actor"] = $val;
        return $this;
    }

    /**
    * Gets the driveItem
    * Exposes the driveItem that was the target of this activity.
    *
    * @return DriveItem|null The driveItem
    */
    public function getDriveItem()
    {
        if (array_key_exists("driveItem", $this->_propDict)) {
            if (is_a($this->_propDict["driveItem"], "\Beta\Microsoft\Graph\Model\DriveItem") || is_null($this->_propDict["driveItem"])) {
                return $this->_propDict["driveItem"];
            } else {
                $this->_propDict["driveItem"] = new DriveItem($this->_propDict["driveItem"]);
                return $this->_propDict["driveItem"];
            }
        }
        return null;
    }

    /**
    * Sets the driveItem
    * Exposes the driveItem that was the target of this activity.
    *
    * @param DriveItem $val The driveItem
    *
    * @return ItemActivity
    */
    public function setDriveItem($val)
    {
        $this->_propDict["driveItem"] = $val;
        return $this;
    }

}
