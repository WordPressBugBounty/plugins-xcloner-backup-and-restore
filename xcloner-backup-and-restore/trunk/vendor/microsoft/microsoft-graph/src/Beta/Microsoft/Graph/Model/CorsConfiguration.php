<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* CorsConfiguration File
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
* CorsConfiguration class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class CorsConfiguration extends Entity
{
    /**
    * Gets the allowedHeaders
    * The request headers that the origin domain may specify on the CORS request. The wildcard character * indicates that any header beginning with the specified prefix is allowed.
    *
    * @return string|null The allowedHeaders
    */
    public function getAllowedHeaders()
    {
        if (array_key_exists("allowedHeaders", $this->_propDict)) {
            return $this->_propDict["allowedHeaders"];
        } else {
            return null;
        }
    }

    /**
    * Sets the allowedHeaders
    * The request headers that the origin domain may specify on the CORS request. The wildcard character * indicates that any header beginning with the specified prefix is allowed.
    *
    * @param string $val The value of the allowedHeaders
    *
    * @return CorsConfiguration
    */
    public function setAllowedHeaders($val)
    {
        $this->_propDict["allowedHeaders"] = $val;
        return $this;
    }
    /**
    * Gets the allowedMethods
    * The HTTP request methods that the origin domain may use for a CORS request.
    *
    * @return string|null The allowedMethods
    */
    public function getAllowedMethods()
    {
        if (array_key_exists("allowedMethods", $this->_propDict)) {
            return $this->_propDict["allowedMethods"];
        } else {
            return null;
        }
    }

    /**
    * Sets the allowedMethods
    * The HTTP request methods that the origin domain may use for a CORS request.
    *
    * @param string $val The value of the allowedMethods
    *
    * @return CorsConfiguration
    */
    public function setAllowedMethods($val)
    {
        $this->_propDict["allowedMethods"] = $val;
        return $this;
    }
    /**
    * Gets the allowedOrigins
    * The origin domains that are permitted to make a request against the service via CORS. The origin domain is the domain from which the request originates. The origin must be an exact case-sensitive match with the origin that the user age sends to the service.
    *
    * @return string|null The allowedOrigins
    */
    public function getAllowedOrigins()
    {
        if (array_key_exists("allowedOrigins", $this->_propDict)) {
            return $this->_propDict["allowedOrigins"];
        } else {
            return null;
        }
    }

    /**
    * Sets the allowedOrigins
    * The origin domains that are permitted to make a request against the service via CORS. The origin domain is the domain from which the request originates. The origin must be an exact case-sensitive match with the origin that the user age sends to the service.
    *
    * @param string $val The value of the allowedOrigins
    *
    * @return CorsConfiguration
    */
    public function setAllowedOrigins($val)
    {
        $this->_propDict["allowedOrigins"] = $val;
        return $this;
    }
    /**
    * Gets the maxAgeInSeconds
    * The maximum amount of time that a browser should cache the response to the preflight OPTIONS request.
    *
    * @return int|null The maxAgeInSeconds
    */
    public function getMaxAgeInSeconds()
    {
        if (array_key_exists("maxAgeInSeconds", $this->_propDict)) {
            return $this->_propDict["maxAgeInSeconds"];
        } else {
            return null;
        }
    }

    /**
    * Sets the maxAgeInSeconds
    * The maximum amount of time that a browser should cache the response to the preflight OPTIONS request.
    *
    * @param int $val The value of the maxAgeInSeconds
    *
    * @return CorsConfiguration
    */
    public function setMaxAgeInSeconds($val)
    {
        $this->_propDict["maxAgeInSeconds"] = $val;
        return $this;
    }
    /**
    * Gets the resource
    * Resource within the application segment for which CORS permissions are granted. / grants permission for whole app segment.
    *
    * @return string|null The resource
    */
    public function getResource()
    {
        if (array_key_exists("resource", $this->_propDict)) {
            return $this->_propDict["resource"];
        } else {
            return null;
        }
    }

    /**
    * Sets the resource
    * Resource within the application segment for which CORS permissions are granted. / grants permission for whole app segment.
    *
    * @param string $val The value of the resource
    *
    * @return CorsConfiguration
    */
    public function setResource($val)
    {
        $this->_propDict["resource"] = $val;
        return $this;
    }
}
