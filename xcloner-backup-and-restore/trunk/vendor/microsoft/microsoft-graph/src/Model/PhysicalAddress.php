<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PhysicalAddress File
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
* PhysicalAddress class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class PhysicalAddress extends Entity
{
    /**
    * Gets the city
    * The city.
    *
    * @return string|null The city
    */
    public function getCity()
    {
        if (array_key_exists("city", $this->_propDict)) {
            return $this->_propDict["city"];
        } else {
            return null;
        }
    }

    /**
    * Sets the city
    * The city.
    *
    * @param string $val The value of the city
    *
    * @return PhysicalAddress
    */
    public function setCity($val)
    {
        $this->_propDict["city"] = $val;
        return $this;
    }
    /**
    * Gets the countryOrRegion
    * The country or region. It's a free-format string value, for example, 'United States'.
    *
    * @return string|null The countryOrRegion
    */
    public function getCountryOrRegion()
    {
        if (array_key_exists("countryOrRegion", $this->_propDict)) {
            return $this->_propDict["countryOrRegion"];
        } else {
            return null;
        }
    }

    /**
    * Sets the countryOrRegion
    * The country or region. It's a free-format string value, for example, 'United States'.
    *
    * @param string $val The value of the countryOrRegion
    *
    * @return PhysicalAddress
    */
    public function setCountryOrRegion($val)
    {
        $this->_propDict["countryOrRegion"] = $val;
        return $this;
    }
    /**
    * Gets the postalCode
    * The postal code.
    *
    * @return string|null The postalCode
    */
    public function getPostalCode()
    {
        if (array_key_exists("postalCode", $this->_propDict)) {
            return $this->_propDict["postalCode"];
        } else {
            return null;
        }
    }

    /**
    * Sets the postalCode
    * The postal code.
    *
    * @param string $val The value of the postalCode
    *
    * @return PhysicalAddress
    */
    public function setPostalCode($val)
    {
        $this->_propDict["postalCode"] = $val;
        return $this;
    }
    /**
    * Gets the state
    * The state.
    *
    * @return string|null The state
    */
    public function getState()
    {
        if (array_key_exists("state", $this->_propDict)) {
            return $this->_propDict["state"];
        } else {
            return null;
        }
    }

    /**
    * Sets the state
    * The state.
    *
    * @param string $val The value of the state
    *
    * @return PhysicalAddress
    */
    public function setState($val)
    {
        $this->_propDict["state"] = $val;
        return $this;
    }
    /**
    * Gets the street
    * The street.
    *
    * @return string|null The street
    */
    public function getStreet()
    {
        if (array_key_exists("street", $this->_propDict)) {
            return $this->_propDict["street"];
        } else {
            return null;
        }
    }

    /**
    * Sets the street
    * The street.
    *
    * @param string $val The value of the street
    *
    * @return PhysicalAddress
    */
    public function setStreet($val)
    {
        $this->_propDict["street"] = $val;
        return $this;
    }
}
