<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ConversationMember File
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
* ConversationMember class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ConversationMember extends Entity
{
    /**
    * Gets the displayName
    * The display name of the user.
    *
    * @return string|null The displayName
    */
    public function getDisplayName()
    {
        if (array_key_exists("displayName", $this->_propDict)) {
            return $this->_propDict["displayName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the displayName
    * The display name of the user.
    *
    * @param string $val The displayName
    *
    * @return ConversationMember
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }

    /**
    * Gets the roles
    * The roles for that user. This property only contains additional qualifiers when relevant - for example, if the member has owner privileges, the roles property contains owner as one of the values. Similarly, if the member is a guest, the roles property contains guest as one of the values. A basic member should not have any values specified in the roles property.
    *
    * @return array|null The roles
    */
    public function getRoles()
    {
        if (array_key_exists("roles", $this->_propDict)) {
            return $this->_propDict["roles"];
        } else {
            return null;
        }
    }

    /**
    * Sets the roles
    * The roles for that user. This property only contains additional qualifiers when relevant - for example, if the member has owner privileges, the roles property contains owner as one of the values. Similarly, if the member is a guest, the roles property contains guest as one of the values. A basic member should not have any values specified in the roles property.
    *
    * @param string[] $val The roles
    *
    * @return ConversationMember
    */
    public function setRoles($val)
    {
        $this->_propDict["roles"] = $val;
        return $this;
    }

    /**
    * Gets the visibleHistoryStartDateTime
    * The timestamp denoting how far back a conversation's history is shared with the conversation member. This property is settable only for members of a chat.
    *
    * @return \DateTime|null The visibleHistoryStartDateTime
    */
    public function getVisibleHistoryStartDateTime()
    {
        if (array_key_exists("visibleHistoryStartDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["visibleHistoryStartDateTime"], "\DateTime") || is_null($this->_propDict["visibleHistoryStartDateTime"])) {
                return $this->_propDict["visibleHistoryStartDateTime"];
            } else {
                $this->_propDict["visibleHistoryStartDateTime"] = new \DateTime($this->_propDict["visibleHistoryStartDateTime"]);
                return $this->_propDict["visibleHistoryStartDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the visibleHistoryStartDateTime
    * The timestamp denoting how far back a conversation's history is shared with the conversation member. This property is settable only for members of a chat.
    *
    * @param \DateTime $val The visibleHistoryStartDateTime
    *
    * @return ConversationMember
    */
    public function setVisibleHistoryStartDateTime($val)
    {
        $this->_propDict["visibleHistoryStartDateTime"] = $val;
        return $this;
    }

}
