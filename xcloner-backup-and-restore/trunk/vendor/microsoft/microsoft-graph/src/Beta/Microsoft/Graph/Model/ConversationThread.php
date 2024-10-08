<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ConversationThread File
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
* ConversationThread class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ConversationThread extends Entity
{

     /**
     * Gets the ccRecipients
    * The Cc: recipients for the thread. Returned only on $select.
     *
     * @return array|null The ccRecipients
     */
    public function getCcRecipients()
    {
        if (array_key_exists("ccRecipients", $this->_propDict)) {
           return $this->_propDict["ccRecipients"];
        } else {
            return null;
        }
    }

    /**
    * Sets the ccRecipients
    * The Cc: recipients for the thread. Returned only on $select.
    *
    * @param Recipient[] $val The ccRecipients
    *
    * @return ConversationThread
    */
    public function setCcRecipients($val)
    {
        $this->_propDict["ccRecipients"] = $val;
        return $this;
    }

    /**
    * Gets the hasAttachments
    * Indicates whether any of the posts within this thread has at least one attachment. Returned by default.
    *
    * @return bool|null The hasAttachments
    */
    public function getHasAttachments()
    {
        if (array_key_exists("hasAttachments", $this->_propDict)) {
            return $this->_propDict["hasAttachments"];
        } else {
            return null;
        }
    }

    /**
    * Sets the hasAttachments
    * Indicates whether any of the posts within this thread has at least one attachment. Returned by default.
    *
    * @param bool $val The hasAttachments
    *
    * @return ConversationThread
    */
    public function setHasAttachments($val)
    {
        $this->_propDict["hasAttachments"] = boolval($val);
        return $this;
    }

    /**
    * Gets the isLocked
    * Indicates if the thread is locked. Returned by default.
    *
    * @return bool|null The isLocked
    */
    public function getIsLocked()
    {
        if (array_key_exists("isLocked", $this->_propDict)) {
            return $this->_propDict["isLocked"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isLocked
    * Indicates if the thread is locked. Returned by default.
    *
    * @param bool $val The isLocked
    *
    * @return ConversationThread
    */
    public function setIsLocked($val)
    {
        $this->_propDict["isLocked"] = boolval($val);
        return $this;
    }

    /**
    * Gets the lastDeliveredDateTime
    * The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Returned by default.
    *
    * @return \DateTime|null The lastDeliveredDateTime
    */
    public function getLastDeliveredDateTime()
    {
        if (array_key_exists("lastDeliveredDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["lastDeliveredDateTime"], "\DateTime") || is_null($this->_propDict["lastDeliveredDateTime"])) {
                return $this->_propDict["lastDeliveredDateTime"];
            } else {
                $this->_propDict["lastDeliveredDateTime"] = new \DateTime($this->_propDict["lastDeliveredDateTime"]);
                return $this->_propDict["lastDeliveredDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the lastDeliveredDateTime
    * The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Returned by default.
    *
    * @param \DateTime $val The lastDeliveredDateTime
    *
    * @return ConversationThread
    */
    public function setLastDeliveredDateTime($val)
    {
        $this->_propDict["lastDeliveredDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the preview
    * A short summary from the body of the latest post in this conversation. Returned by default.
    *
    * @return string|null The preview
    */
    public function getPreview()
    {
        if (array_key_exists("preview", $this->_propDict)) {
            return $this->_propDict["preview"];
        } else {
            return null;
        }
    }

    /**
    * Sets the preview
    * A short summary from the body of the latest post in this conversation. Returned by default.
    *
    * @param string $val The preview
    *
    * @return ConversationThread
    */
    public function setPreview($val)
    {
        $this->_propDict["preview"] = $val;
        return $this;
    }

    /**
    * Gets the topic
    * The topic of the conversation. This property can be set when the conversation is created, but it cannot be updated. Returned by default.
    *
    * @return string|null The topic
    */
    public function getTopic()
    {
        if (array_key_exists("topic", $this->_propDict)) {
            return $this->_propDict["topic"];
        } else {
            return null;
        }
    }

    /**
    * Sets the topic
    * The topic of the conversation. This property can be set when the conversation is created, but it cannot be updated. Returned by default.
    *
    * @param string $val The topic
    *
    * @return ConversationThread
    */
    public function setTopic($val)
    {
        $this->_propDict["topic"] = $val;
        return $this;
    }


     /**
     * Gets the toRecipients
    * The To: recipients for the thread. Returned only on $select.
     *
     * @return array|null The toRecipients
     */
    public function getToRecipients()
    {
        if (array_key_exists("toRecipients", $this->_propDict)) {
           return $this->_propDict["toRecipients"];
        } else {
            return null;
        }
    }

    /**
    * Sets the toRecipients
    * The To: recipients for the thread. Returned only on $select.
    *
    * @param Recipient[] $val The toRecipients
    *
    * @return ConversationThread
    */
    public function setToRecipients($val)
    {
        $this->_propDict["toRecipients"] = $val;
        return $this;
    }

    /**
    * Gets the uniqueSenders
    * All the users that sent a message to this thread. Returned by default.
    *
    * @return array|null The uniqueSenders
    */
    public function getUniqueSenders()
    {
        if (array_key_exists("uniqueSenders", $this->_propDict)) {
            return $this->_propDict["uniqueSenders"];
        } else {
            return null;
        }
    }

    /**
    * Sets the uniqueSenders
    * All the users that sent a message to this thread. Returned by default.
    *
    * @param string[] $val The uniqueSenders
    *
    * @return ConversationThread
    */
    public function setUniqueSenders($val)
    {
        $this->_propDict["uniqueSenders"] = $val;
        return $this;
    }


     /**
     * Gets the posts
     *
     * @return array|null The posts
     */
    public function getPosts()
    {
        if (array_key_exists("posts", $this->_propDict)) {
           return $this->_propDict["posts"];
        } else {
            return null;
        }
    }

    /**
    * Sets the posts
    *
    * @param Post[] $val The posts
    *
    * @return ConversationThread
    */
    public function setPosts($val)
    {
        $this->_propDict["posts"] = $val;
        return $this;
    }

}
