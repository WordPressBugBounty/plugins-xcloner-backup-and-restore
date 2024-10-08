<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* IpNamedLocation File
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
* IpNamedLocation class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class IpNamedLocation extends NamedLocation
{

     /**
     * Gets the ipRanges
    * List of IP address ranges in IPv4 CIDR format (e.g. 1.2.3.4/32) or any allowable IPv6 format from IETF RFC596. Required.
     *
     * @return array|null The ipRanges
     */
    public function getIpRanges()
    {
        if (array_key_exists("ipRanges", $this->_propDict)) {
           return $this->_propDict["ipRanges"];
        } else {
            return null;
        }
    }

    /**
    * Sets the ipRanges
    * List of IP address ranges in IPv4 CIDR format (e.g. 1.2.3.4/32) or any allowable IPv6 format from IETF RFC596. Required.
    *
    * @param IpRange[] $val The ipRanges
    *
    * @return IpNamedLocation
    */
    public function setIpRanges($val)
    {
        $this->_propDict["ipRanges"] = $val;
        return $this;
    }

    /**
    * Gets the isTrusted
    * true if this location is explicitly trusted. Optional. Default value is false.
    *
    * @return bool|null The isTrusted
    */
    public function getIsTrusted()
    {
        if (array_key_exists("isTrusted", $this->_propDict)) {
            return $this->_propDict["isTrusted"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isTrusted
    * true if this location is explicitly trusted. Optional. Default value is false.
    *
    * @param bool $val The isTrusted
    *
    * @return IpNamedLocation
    */
    public function setIsTrusted($val)
    {
        $this->_propDict["isTrusted"] = boolval($val);
        return $this;
    }

}
