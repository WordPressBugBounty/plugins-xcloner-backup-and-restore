<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Office365GroupsActivityGroupCounts File
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
* Office365GroupsActivityGroupCounts class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class Office365GroupsActivityGroupCounts extends Entity
{
    /**
    * Gets the active
    * The number of active groups. A group is considered active if any of the following occurred: group mailbox received email; user viewed, edited, shared, or synced files in SharePoint document library; user viewed SharePoint pages; user posted, read, or liked messages in Yammer groups.
    *
    * @return int|null The active
    */
    public function getActive()
    {
        if (array_key_exists("active", $this->_propDict)) {
            return $this->_propDict["active"];
        } else {
            return null;
        }
    }

    /**
    * Sets the active
    * The number of active groups. A group is considered active if any of the following occurred: group mailbox received email; user viewed, edited, shared, or synced files in SharePoint document library; user viewed SharePoint pages; user posted, read, or liked messages in Yammer groups.
    *
    * @param int $val The active
    *
    * @return Office365GroupsActivityGroupCounts
    */
    public function setActive($val)
    {
        $this->_propDict["active"] = intval($val);
        return $this;
    }

    /**
    * Gets the reportDate
    * The date on which a number of groups were active.
    *
    * @return \DateTime|null The reportDate
    */
    public function getReportDate()
    {
        if (array_key_exists("reportDate", $this->_propDict)) {
            if (is_a($this->_propDict["reportDate"], "\DateTime") || is_null($this->_propDict["reportDate"])) {
                return $this->_propDict["reportDate"];
            } else {
                $this->_propDict["reportDate"] = new \DateTime($this->_propDict["reportDate"]);
                return $this->_propDict["reportDate"];
            }
        }
        return null;
    }

    /**
    * Sets the reportDate
    * The date on which a number of groups were active.
    *
    * @param \DateTime $val The reportDate
    *
    * @return Office365GroupsActivityGroupCounts
    */
    public function setReportDate($val)
    {
        $this->_propDict["reportDate"] = $val;
        return $this;
    }

    /**
    * Gets the reportPeriod
    * The number of days the report covers.
    *
    * @return string|null The reportPeriod
    */
    public function getReportPeriod()
    {
        if (array_key_exists("reportPeriod", $this->_propDict)) {
            return $this->_propDict["reportPeriod"];
        } else {
            return null;
        }
    }

    /**
    * Sets the reportPeriod
    * The number of days the report covers.
    *
    * @param string $val The reportPeriod
    *
    * @return Office365GroupsActivityGroupCounts
    */
    public function setReportPeriod($val)
    {
        $this->_propDict["reportPeriod"] = $val;
        return $this;
    }

    /**
    * Gets the reportRefreshDate
    * The latest date of the content.
    *
    * @return \DateTime|null The reportRefreshDate
    */
    public function getReportRefreshDate()
    {
        if (array_key_exists("reportRefreshDate", $this->_propDict)) {
            if (is_a($this->_propDict["reportRefreshDate"], "\DateTime") || is_null($this->_propDict["reportRefreshDate"])) {
                return $this->_propDict["reportRefreshDate"];
            } else {
                $this->_propDict["reportRefreshDate"] = new \DateTime($this->_propDict["reportRefreshDate"]);
                return $this->_propDict["reportRefreshDate"];
            }
        }
        return null;
    }

    /**
    * Sets the reportRefreshDate
    * The latest date of the content.
    *
    * @param \DateTime $val The reportRefreshDate
    *
    * @return Office365GroupsActivityGroupCounts
    */
    public function setReportRefreshDate($val)
    {
        $this->_propDict["reportRefreshDate"] = $val;
        return $this;
    }

    /**
    * Gets the total
    * The total number of groups.
    *
    * @return int|null The total
    */
    public function getTotal()
    {
        if (array_key_exists("total", $this->_propDict)) {
            return $this->_propDict["total"];
        } else {
            return null;
        }
    }

    /**
    * Sets the total
    * The total number of groups.
    *
    * @param int $val The total
    *
    * @return Office365GroupsActivityGroupCounts
    */
    public function setTotal($val)
    {
        $this->_propDict["total"] = intval($val);
        return $this;
    }

}
