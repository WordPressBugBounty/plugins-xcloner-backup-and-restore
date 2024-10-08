<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* IPv6CidrRange File
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
* IPv6CidrRange class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class IPv6CidrRange extends IpRange
{
    /**
    * Set the @odata.type since this type is immediately descended from an abstract
    * type that is referenced as the type in an entity.
    * @param array $propDict The property dictionary
    */
    public function __construct($propDict = array())
    {
        parent::__construct($propDict);
        $this->setODataType("#microsoft.graph.iPv6CidrRange");
    }

    /**
    * Gets the cidrAddress
    * IPv6 address in CIDR notation. Not nullable.
    *
    * @return string|null The cidrAddress
    */
    public function getCidrAddress()
    {
        if (array_key_exists("cidrAddress", $this->_propDict)) {
            return $this->_propDict["cidrAddress"];
        } else {
            return null;
        }
    }

    /**
    * Sets the cidrAddress
    * IPv6 address in CIDR notation. Not nullable.
    *
    * @param string $val The value of the cidrAddress
    *
    * @return IPv6CidrRange
    */
    public function setCidrAddress($val)
    {
        $this->_propDict["cidrAddress"] = $val;
        return $this;
    }
}
