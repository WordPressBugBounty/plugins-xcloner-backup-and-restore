<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* MailFolder File
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
* MailFolder class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class MailFolder extends Entity
{
    /**
    * Gets the childFolderCount
    * The number of immediate child mailFolders in the current mailFolder.
    *
    * @return int|null The childFolderCount
    */
    public function getChildFolderCount()
    {
        if (array_key_exists("childFolderCount", $this->_propDict)) {
            return $this->_propDict["childFolderCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the childFolderCount
    * The number of immediate child mailFolders in the current mailFolder.
    *
    * @param int $val The childFolderCount
    *
    * @return MailFolder
    */
    public function setChildFolderCount($val)
    {
        $this->_propDict["childFolderCount"] = intval($val);
        return $this;
    }

    /**
    * Gets the displayName
    * The mailFolder's display name.
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
    * The mailFolder's display name.
    *
    * @param string $val The displayName
    *
    * @return MailFolder
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }

    /**
    * Gets the isHidden
    * Indicates whether the mailFolder is hidden. This property can be set only when creating the folder. Find more information in Hidden mail folders.
    *
    * @return bool|null The isHidden
    */
    public function getIsHidden()
    {
        if (array_key_exists("isHidden", $this->_propDict)) {
            return $this->_propDict["isHidden"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isHidden
    * Indicates whether the mailFolder is hidden. This property can be set only when creating the folder. Find more information in Hidden mail folders.
    *
    * @param bool $val The isHidden
    *
    * @return MailFolder
    */
    public function setIsHidden($val)
    {
        $this->_propDict["isHidden"] = boolval($val);
        return $this;
    }

    /**
    * Gets the parentFolderId
    * The unique identifier for the mailFolder's parent mailFolder.
    *
    * @return string|null The parentFolderId
    */
    public function getParentFolderId()
    {
        if (array_key_exists("parentFolderId", $this->_propDict)) {
            return $this->_propDict["parentFolderId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the parentFolderId
    * The unique identifier for the mailFolder's parent mailFolder.
    *
    * @param string $val The parentFolderId
    *
    * @return MailFolder
    */
    public function setParentFolderId($val)
    {
        $this->_propDict["parentFolderId"] = $val;
        return $this;
    }

    /**
    * Gets the totalItemCount
    * The number of items in the mailFolder.
    *
    * @return int|null The totalItemCount
    */
    public function getTotalItemCount()
    {
        if (array_key_exists("totalItemCount", $this->_propDict)) {
            return $this->_propDict["totalItemCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the totalItemCount
    * The number of items in the mailFolder.
    *
    * @param int $val The totalItemCount
    *
    * @return MailFolder
    */
    public function setTotalItemCount($val)
    {
        $this->_propDict["totalItemCount"] = intval($val);
        return $this;
    }

    /**
    * Gets the unreadItemCount
    * The number of items in the mailFolder marked as unread.
    *
    * @return int|null The unreadItemCount
    */
    public function getUnreadItemCount()
    {
        if (array_key_exists("unreadItemCount", $this->_propDict)) {
            return $this->_propDict["unreadItemCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the unreadItemCount
    * The number of items in the mailFolder marked as unread.
    *
    * @param int $val The unreadItemCount
    *
    * @return MailFolder
    */
    public function setUnreadItemCount($val)
    {
        $this->_propDict["unreadItemCount"] = intval($val);
        return $this;
    }


     /**
     * Gets the childFolders
    * The collection of child folders in the mailFolder.
     *
     * @return array|null The childFolders
     */
    public function getChildFolders()
    {
        if (array_key_exists("childFolders", $this->_propDict)) {
           return $this->_propDict["childFolders"];
        } else {
            return null;
        }
    }

    /**
    * Sets the childFolders
    * The collection of child folders in the mailFolder.
    *
    * @param MailFolder[] $val The childFolders
    *
    * @return MailFolder
    */
    public function setChildFolders($val)
    {
        $this->_propDict["childFolders"] = $val;
        return $this;
    }


     /**
     * Gets the messageRules
    * The collection of rules that apply to the user's Inbox folder.
     *
     * @return array|null The messageRules
     */
    public function getMessageRules()
    {
        if (array_key_exists("messageRules", $this->_propDict)) {
           return $this->_propDict["messageRules"];
        } else {
            return null;
        }
    }

    /**
    * Sets the messageRules
    * The collection of rules that apply to the user's Inbox folder.
    *
    * @param MessageRule[] $val The messageRules
    *
    * @return MailFolder
    */
    public function setMessageRules($val)
    {
        $this->_propDict["messageRules"] = $val;
        return $this;
    }


     /**
     * Gets the messages
    * The collection of messages in the mailFolder.
     *
     * @return array|null The messages
     */
    public function getMessages()
    {
        if (array_key_exists("messages", $this->_propDict)) {
           return $this->_propDict["messages"];
        } else {
            return null;
        }
    }

    /**
    * Sets the messages
    * The collection of messages in the mailFolder.
    *
    * @param Message[] $val The messages
    *
    * @return MailFolder
    */
    public function setMessages($val)
    {
        $this->_propDict["messages"] = $val;
        return $this;
    }


     /**
     * Gets the multiValueExtendedProperties
    * The collection of multi-value extended properties defined for the mailFolder. Read-only. Nullable.
     *
     * @return array|null The multiValueExtendedProperties
     */
    public function getMultiValueExtendedProperties()
    {
        if (array_key_exists("multiValueExtendedProperties", $this->_propDict)) {
           return $this->_propDict["multiValueExtendedProperties"];
        } else {
            return null;
        }
    }

    /**
    * Sets the multiValueExtendedProperties
    * The collection of multi-value extended properties defined for the mailFolder. Read-only. Nullable.
    *
    * @param MultiValueLegacyExtendedProperty[] $val The multiValueExtendedProperties
    *
    * @return MailFolder
    */
    public function setMultiValueExtendedProperties($val)
    {
        $this->_propDict["multiValueExtendedProperties"] = $val;
        return $this;
    }


     /**
     * Gets the singleValueExtendedProperties
    * The collection of single-value extended properties defined for the mailFolder. Read-only. Nullable.
     *
     * @return array|null The singleValueExtendedProperties
     */
    public function getSingleValueExtendedProperties()
    {
        if (array_key_exists("singleValueExtendedProperties", $this->_propDict)) {
           return $this->_propDict["singleValueExtendedProperties"];
        } else {
            return null;
        }
    }

    /**
    * Sets the singleValueExtendedProperties
    * The collection of single-value extended properties defined for the mailFolder. Read-only. Nullable.
    *
    * @param SingleValueLegacyExtendedProperty[] $val The singleValueExtendedProperties
    *
    * @return MailFolder
    */
    public function setSingleValueExtendedProperties($val)
    {
        $this->_propDict["singleValueExtendedProperties"] = $val;
        return $this;
    }

}
