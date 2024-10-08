<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Endpoint File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Microsoft\Graph\CallRecords\Model;

if (!defined('ABSPATH') && PHP_SAPI !== 'cli') { die(); }

/**
* Endpoint class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class Endpoint extends \Microsoft\Graph\Model\Entity
{

    /**
    * Gets the userAgent
    * User-agent reported by this endpoint.
    *
    * @return UserAgent|null The userAgent
    */
    public function getUserAgent()
    {
        if (array_key_exists("userAgent", $this->_propDict)) {
            if (is_a($this->_propDict["userAgent"], "\Microsoft\Graph\CallRecords\Model\UserAgent") || is_null($this->_propDict["userAgent"])) {
                return $this->_propDict["userAgent"];
            } else {
                $this->_propDict["userAgent"] = new UserAgent($this->_propDict["userAgent"]);
                return $this->_propDict["userAgent"];
            }
        }
        return null;
    }

    /**
    * Sets the userAgent
    * User-agent reported by this endpoint.
    *
    * @param UserAgent $val The value to assign to the userAgent
    *
    * @return Endpoint The Endpoint
    */
    public function setUserAgent($val)
    {
        $this->_propDict["userAgent"] = $val;
         return $this;
    }
}
