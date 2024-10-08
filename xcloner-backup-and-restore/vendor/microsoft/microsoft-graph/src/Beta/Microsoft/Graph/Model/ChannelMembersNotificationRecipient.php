<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ChannelMembersNotificationRecipient File
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
* ChannelMembersNotificationRecipient class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ChannelMembersNotificationRecipient extends TeamworkNotificationRecipient
{
    /**
    * Gets the channelId
    * The channel's identifier.
    *
    * @return string|null The channelId
    */
    public function getChannelId()
    {
        if (array_key_exists("channelId", $this->_propDict)) {
            return $this->_propDict["channelId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the channelId
    * The channel's identifier.
    *
    * @param string $val The value of the channelId
    *
    * @return ChannelMembersNotificationRecipient
    */
    public function setChannelId($val)
    {
        $this->_propDict["channelId"] = $val;
        return $this;
    }
    /**
    * Gets the teamId
    * The team's identifier under which the channel resides.
    *
    * @return string|null The teamId
    */
    public function getTeamId()
    {
        if (array_key_exists("teamId", $this->_propDict)) {
            return $this->_propDict["teamId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the teamId
    * The team's identifier under which the channel resides.
    *
    * @param string $val The value of the teamId
    *
    * @return ChannelMembersNotificationRecipient
    */
    public function setTeamId($val)
    {
        $this->_propDict["teamId"] = $val;
        return $this;
    }
}
