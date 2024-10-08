<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WinGetAppRestartSettings File
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
* WinGetAppRestartSettings class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class WinGetAppRestartSettings extends Entity
{
    /**
    * Gets the countdownDisplayBeforeRestartInMinutes
    * The number of minutes before the restart time to display the countdown dialog for pending restarts.
    *
    * @return int|null The countdownDisplayBeforeRestartInMinutes
    */
    public function getCountdownDisplayBeforeRestartInMinutes()
    {
        if (array_key_exists("countdownDisplayBeforeRestartInMinutes", $this->_propDict)) {
            return $this->_propDict["countdownDisplayBeforeRestartInMinutes"];
        } else {
            return null;
        }
    }

    /**
    * Sets the countdownDisplayBeforeRestartInMinutes
    * The number of minutes before the restart time to display the countdown dialog for pending restarts.
    *
    * @param int $val The value of the countdownDisplayBeforeRestartInMinutes
    *
    * @return WinGetAppRestartSettings
    */
    public function setCountdownDisplayBeforeRestartInMinutes($val)
    {
        $this->_propDict["countdownDisplayBeforeRestartInMinutes"] = $val;
        return $this;
    }
    /**
    * Gets the gracePeriodInMinutes
    * The number of minutes to wait before restarting the device after an app installation.
    *
    * @return int|null The gracePeriodInMinutes
    */
    public function getGracePeriodInMinutes()
    {
        if (array_key_exists("gracePeriodInMinutes", $this->_propDict)) {
            return $this->_propDict["gracePeriodInMinutes"];
        } else {
            return null;
        }
    }

    /**
    * Sets the gracePeriodInMinutes
    * The number of minutes to wait before restarting the device after an app installation.
    *
    * @param int $val The value of the gracePeriodInMinutes
    *
    * @return WinGetAppRestartSettings
    */
    public function setGracePeriodInMinutes($val)
    {
        $this->_propDict["gracePeriodInMinutes"] = $val;
        return $this;
    }
    /**
    * Gets the restartNotificationSnoozeDurationInMinutes
    * The number of minutes to snooze the restart notification dialog when the snooze button is selected.
    *
    * @return int|null The restartNotificationSnoozeDurationInMinutes
    */
    public function getRestartNotificationSnoozeDurationInMinutes()
    {
        if (array_key_exists("restartNotificationSnoozeDurationInMinutes", $this->_propDict)) {
            return $this->_propDict["restartNotificationSnoozeDurationInMinutes"];
        } else {
            return null;
        }
    }

    /**
    * Sets the restartNotificationSnoozeDurationInMinutes
    * The number of minutes to snooze the restart notification dialog when the snooze button is selected.
    *
    * @param int $val The value of the restartNotificationSnoozeDurationInMinutes
    *
    * @return WinGetAppRestartSettings
    */
    public function setRestartNotificationSnoozeDurationInMinutes($val)
    {
        $this->_propDict["restartNotificationSnoozeDurationInMinutes"] = $val;
        return $this;
    }
}
