<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AttachmentSession File
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
* AttachmentSession class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AttachmentSession extends Entity
{
    /**
    * Gets the content
    * The content streams that are uploaded.
    *
    * @return \GuzzleHttp\Psr7\Stream|null The content
    */
    public function getContent()
    {
        if (array_key_exists("content", $this->_propDict)) {
            if (is_a($this->_propDict["content"], "\GuzzleHttp\Psr7\Stream") || is_null($this->_propDict["content"])) {
                return $this->_propDict["content"];
            } else {
                $this->_propDict["content"] = \GuzzleHttp\Psr7\Utils::streamFor($this->_propDict["content"]);
                return $this->_propDict["content"];
            }
        }
        return null;
    }

    /**
    * Sets the content
    * The content streams that are uploaded.
    *
    * @param \GuzzleHttp\Psr7\Stream $val The content
    *
    * @return AttachmentSession
    */
    public function setContent($val)
    {
        $this->_propDict["content"] = $val;
        return $this;
    }

    /**
    * Gets the expirationDateTime
    * The date and time in UTC when the upload session will expire. The complete file must be uploaded before this expiration time is reached.
    *
    * @return \DateTime|null The expirationDateTime
    */
    public function getExpirationDateTime()
    {
        if (array_key_exists("expirationDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["expirationDateTime"], "\DateTime") || is_null($this->_propDict["expirationDateTime"])) {
                return $this->_propDict["expirationDateTime"];
            } else {
                $this->_propDict["expirationDateTime"] = new \DateTime($this->_propDict["expirationDateTime"]);
                return $this->_propDict["expirationDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the expirationDateTime
    * The date and time in UTC when the upload session will expire. The complete file must be uploaded before this expiration time is reached.
    *
    * @param \DateTime $val The expirationDateTime
    *
    * @return AttachmentSession
    */
    public function setExpirationDateTime($val)
    {
        $this->_propDict["expirationDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the nextExpectedRanges
    * Indicates a single value {start} that represents the location in the file where the next upload should begin.
    *
    * @return array|null The nextExpectedRanges
    */
    public function getNextExpectedRanges()
    {
        if (array_key_exists("nextExpectedRanges", $this->_propDict)) {
            return $this->_propDict["nextExpectedRanges"];
        } else {
            return null;
        }
    }

    /**
    * Sets the nextExpectedRanges
    * Indicates a single value {start} that represents the location in the file where the next upload should begin.
    *
    * @param string[] $val The nextExpectedRanges
    *
    * @return AttachmentSession
    */
    public function setNextExpectedRanges($val)
    {
        $this->_propDict["nextExpectedRanges"] = $val;
        return $this;
    }

}
